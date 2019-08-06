<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Office;
use App\Employee;
use App\Supervisor;

class Area extends Model
{
    protected $fillable = ['office_id','name'];

    public function office(){
        return $this->belongsTo(Office::class);
    }

    public function employees(){
        return $this->hasMany(Employees::class);
    }

    public function supervisor(){
        return $this->hasOne(Supervisor::class);
    }

}
