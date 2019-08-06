<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Person extends Model
{
    protected $fillable = [
        'name',
        'card_id',
        'extension',
        'phone',
        'date_admission'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

}
