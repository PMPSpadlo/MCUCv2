<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return User::where('id',$this->wallet_id)->first();
    }

    public function currency()
    {
        return Currency::where('id',$this->currency_id)->first();
    }
}
