<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Fir extends Model
{
    use HasFactory;

    protected $fillable = [
        'complainant_name', 'identity_proof', 'contact_number', 'incident_date',
        'accused_name', 'incident_location', 'incident_description', 'user_id', 'payment_id', 'order_id', 'amount', 'currency', 'receipt', 'status','current_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query, $term)
{
    if ($term) {
        return $query->where('name', 'like', '%' . $term . '%')
                     ->orWhere('email', 'like', '%' . $term . '%');
        // Add more conditions here if needed
    }

    return $query;
}
}
