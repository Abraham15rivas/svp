<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Permit;

class Reason extends Model
{
    protected $fillable = [
        'name'
    ];

    public function permits(){
        return $this->hasMany(Permit::class);
    }
}
