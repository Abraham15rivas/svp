<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserDay extends Model
{
    protected $filleable = [
        'user_id',
        'available_days'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
