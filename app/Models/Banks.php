<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    /** @use HasFactory<\Database\Factories\BanksFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'account_type',
        'is_active',
    ];
}
