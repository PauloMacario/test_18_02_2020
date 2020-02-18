<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Phone;
use App\Address;

class User extends model
{
   
    protected $fillable = [
        'name', 'last_name', 'email', 'birth_date'
    ];

    public function phone()
    {
        return $this->hasOne(Phone::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
