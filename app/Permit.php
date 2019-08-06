<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;
use App\Supervisor;
use App\LineDirector;
use App\ManagingDirector;

class Permit extends Model
{
    const VISTO = 'Visto';
    const APROBADO = 'Aprobado';
    const RECHAZADO = 'Rechazado';
    const PROCESO = 'Proceso';
    
    protected $filleable = [
        'employee_id',
        'supervisor_id',
        'directorl_id',
        'directorg_id',
        'start_date',
        'end_date',
        'reason_id',
        'days',
        'turn',
        'permit_type',
        'substitute_require',
        'observation',
        'state'
    ];

    public function statePermit(){
        $state = $this->state;
        if($state == Permit::VISTO){
            return Permit::VISTO;
        }elseif($state == Permit::APROBADO){
            return Permit::APROBADO;
        }elseif($state == Permit::RECHAZADO){
            return Permit::RECHAZADO;
        }else{
            return Permit::PROCESO;
        }
    }

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
