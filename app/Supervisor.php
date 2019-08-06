<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Area;
use App\Holiday;
use App\Permit;
use App\Advance;
use App\Suspension;

class Supervisor extends Model
{
    protected $fillable = [
        'user_id',
        'area_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function holidays(){
        return $this->hasMany(Holiday::class);
    }

    public function permits(){
        return $this->hasMany(Permit::class);
    }

    public function advances(){
        return $this->hasMany(Advance::class);
    }

    public function suspensions(){
        return $this->hasMany(Suspension::class);
    }
}
