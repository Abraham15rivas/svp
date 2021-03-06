<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Office;
use App\Holiday;
use App\Permit;
use App\Advance;
use App\Suspension;

class ManagingDirector extends Model
{
    protected $fillable = [
        'user_id',
        'office_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function office(){
        return $this->belongsTo(User::class);
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
