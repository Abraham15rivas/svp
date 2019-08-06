<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Notification extends Model
{
    protected $fillable = [
        'origin_id',
        'destination_id',
        'description'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}