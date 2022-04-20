<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw_money extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUser',
        'withdrawMoney',
    ];
}