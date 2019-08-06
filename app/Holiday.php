<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;
use App\Supervisor;
use App\LineDirector;
use App\ManagingDirector;

class Holiday extends Model
{
    const VISTO = 'Visto';
    const APROBADO = 'Aprobado';
    const RECHAZADO = 'Rechazado';
    const PROCESO = 'En proceso';

    protected $fillable = [
        'employee_id',
        'supervisor_id',
        'directorl_id',
        'directorg_id',
        'avaiable_days',
        'enjoyed_days',
        'leftover_days',
        'period',
        'start_date',
        'end_date',
        'refund_date',
        'state'
    ];

    public function stateHoliday(){
        $state = $this->state;
        if($state == Holiday::VISTO){
            return Holiday::VISTO;
        }elseif($state == Holiday::APROBADO){
            return Holiday::APROBADO;
        }elseif($state == Holiday::RECHAZADO){
            return Holiday::RECHAZADO;
        }else{
            return Holiday::PROCESO;
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
