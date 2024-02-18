<?php

namespace App\Notifications;

use App\Models\Fir;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FirStatusUpdatedNotification extends Notification
{
    use Queueable;
    protected $fir;
    /**
     * Create a new notification instance.
     */
    public function __construct(Fir $fir)
    {
        $this->fir = $fir;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->subject('FIR Status Updated')
        ->line('The status of your FIR has been updated.')
        ->action('View FIR', route('fir.show', $this->fir->receipt))
        ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
