<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{   
    const ROOT = 1;
    const SUPERADMIN = 2;
    const DIRECTOR_GENERAL = 3;
    const DIRECTOR_LINEA = 4;
    const SUPERVISOR = 5;
    const ANALISTA = 6;
    const EMPLEADO = 7;

    public function users(){
        return $this->hasMany(User::class);
    }
}
