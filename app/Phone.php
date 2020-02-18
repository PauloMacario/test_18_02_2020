<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    
    protected $fillable = [
        'user_id', 'phone_one', 'phone_two', 'phone_three', 'phone_four', 'phone_five', 'phone_six'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
