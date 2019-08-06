<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;
use App\Supervisor;
use App\LineDirector;
use App\ManagingDirector;

class Suspension extends Model
{
    protected $fillable = [
        'employee_id',
        'supervisor_id',
        'suspension_date',
        'refund_date',
        'leftover_days',
        'reason'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function supervisor(){
        return $this->belongsTo(Supervisor::class);
    }

    public function linedirector(){
        return $this->belongsTo(LineDirector::class);
    }

    public function managingdirector(){
        return belongsTo(ManagingDirector::class);
    }
}
