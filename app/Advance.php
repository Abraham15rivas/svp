<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;
use App\Supervisor;
use App\LineDirector;
use App\ManagingDirector;

class Advance extends Model
{
    const VISTO = 'Visto';
    const APROBADO = 'Aprobado';
    const RECHAZADO = 'Rechazado';
    const PROCESO = 'Proceso';

    protected $fillable = [
        'employee_id',
        'supervisor_id',
        'directorl_id',
        'directorg_id',
        'available_days',
        'enjoyed_days',
        'leftover_days',
        'period',
        'start_date',
        'end_date',
        'refund_date',
        'state'
    ];
    public function stateAdvance(){
        $state = $this->state;
        if($state == Advance::VISTO){
            return Advance::VISTO;
        }elseif($state == Advance::APROBADO){
            return Advance::APROBADO;
        }elseif($state == Advance::RECHAZADO){
            return Advance::RECHAZADO;
        }else{
            return Advance::PROCESO;
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
