<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoxesTransactions extends Model
{
    /** @use HasFactory<\Database\Factories\BoxesTransactionsFactory> */
    use HasFactory;
    protected $fillable = [
        'box_id',
        'description',
        'amount',
        'type',
    ];
}
