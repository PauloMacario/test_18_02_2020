<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'zip_code', 'state', 'city', 'neighborhood', 'street', 'number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
