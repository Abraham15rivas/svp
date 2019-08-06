<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Area;
use App\ManagingDirector;
use App\LineDirector;
use App\Employee;

class Office extends Model
{
    protected $fillable = [
        'name',
        'acronimo'
    ];

    public function areas(){
        return $this->hasMany(Area::class);
    }

    public function managingdirector(){
        return $this->hasOne(ManagingDirector::class);
    }

    public function linedirector(){
        return $this->hasOne(LineDirector::class);
    }

    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
