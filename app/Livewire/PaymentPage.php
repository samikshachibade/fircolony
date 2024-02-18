<?php

namespace App\Livewire;

use Livewire\Component;
use Razorpay\Api\Api;
use App\Models\Fir;
use Livewire\Attributes\On;

class PaymentPage extends Component
{

    public $firData;

    public $orderID;

    public function mount()
    {
        if (!auth()->check()) {
            return redirect(route('login'));
        }
        $this->firData = session('firData', null);

        if (empty($this->firData)) {
            session()->flash('error', 'No FIR data found. Please submit your FIR again.');
            return redirect('/');
        }
    }

    public function render()
    {
        return view('livewire.payment-page');
    }

    public function processPayment()
    {
        $apiKey = env('RAZORPAY_KEY');
        $user = auth()->user();
        $receiptId = 'rcptid_' . rand(1000, 9999);

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $order = $api->order->create([
            'receipt' => $receiptId,
            'amount' => 500 * 100,
            'currency' => 'INR'
        ]);
        $this->orderID = $order['id'];

        session(['orderDetails' => [
            'order_id' => $this->orderID,
            'receipt' => $receiptId,
            'amount' => 500,
            'currency' => 'INR'
        ]]);

        $prefillData = [
            'name' => $user->name,
            'email' => $user->email,
            'contact' => $user->mobile_number,
        ];

        $this->dispatch('initiatePayment', ['orderID' => $this->orderID, 'prefill' => $prefillData, 'apiKey' => $apiKey]);
    }


    #[On('paymentSuccessful')]
    public function handlePaymentSuccess($data)
    {
        $paymentDetails =$data;
        $orderDetails = session('orderDetails');
        $filesString = implode(',', $this->firData['identity_proof']);
        session()->forget('orderDetails');
        Fir::create([
            'user_id'=>$this->firData['user_id'],
            'complainant_name' => $this->firData['complainant_name'],
            'contact_number' => $this->firData['contact_number'],
            'incident_date' =>$this->firData['incident_date'],
            'accused_name' => $this->firData['accused_name'],
            'identity_proof'=>$filesString,
            'incident_location' => $this->firData['incident_location'],
            'incident_description' => $this->firData['incident_description'],
            'payment_id' => $paymentDetails['razorpay_payment_id'],
            'order_id' => $orderDetails['order_id'],
            'amount' => $orderDetails['amount'],
            'currency' => $orderDetails['currency'],
            'receipt' => $orderDetails['receipt'],
            'status' => 'paid'
        ]);
        $this->dispatch('showPopup');

        redirect('/');
    }
}
