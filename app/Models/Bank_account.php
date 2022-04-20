<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank_account extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'bank_account_name',
        'bank_account_number',
        'bank_name',
    ];
}
