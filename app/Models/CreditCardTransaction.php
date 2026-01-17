<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCardTransaction extends Model
{
    /** @use HasFactory<\Database\Factories\CreditCardTransactionFactory> */
    use HasFactory;
    protected $fillable = [
        'credit_card_id',
        'credit_card_invoice_id',
        'description',
        'amount',
        'installments',
        'current_installment',
        'transaction_date',
    ];
    public function creditCard()
    {
        return $this->belongsTo(CreditCard::class);
    }
    public function invoice()
    {
        return $this->belongsTo(CreditCardInvoice::class, 'credit_card_invoice_id');
    }
}
