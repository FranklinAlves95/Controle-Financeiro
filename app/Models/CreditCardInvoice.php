<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCardInvoice extends Model
{
    /** @use HasFactory<\Database\Factories\CreditCardInvoiceFactory> */
    use HasFactory;
    protected $fillable = [
        'credit_card_id',
        'reference_month',
        'amount',
        'status',
    ];
    public function creditCard()
    {
        return $this->belongsTo(CreditCard::class);
    }
}
