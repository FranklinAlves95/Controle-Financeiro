<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boxes extends Model
{
    /** @use HasFactory<\Database\Factories\BankBoxesFactory> */
    use HasFactory;
    protected $fillable = [
        'bank_id',
        'name',
        'description',
        'balance',
        'is_active',
    ];
}
