<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Fir extends Model
{
    use HasFactory;

    protected $fillable = [
        'complainant_name', 'identity_proof', 'contact_number', 'incident_date',
        'accused_name', 'incident_location', 'incident_description', 'user_id', 'payment_id', 'order_id', 'amount', 'currency', 'receipt', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
