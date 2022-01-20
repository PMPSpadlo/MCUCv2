<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    public function user()
    {
        return User::where('id',$this->owner)->first();
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
