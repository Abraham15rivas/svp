<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Employee;
use App\Supervisor;
use App\LineDirector;
use App\ManagingDirector;
use App\Trace;
use App\UserDay;
use App\Role;
use App\Person;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    const AVAILABLE = 'disponible';
    const PERMIT = 'de permiso';
    const HOLIDAY = 'de vacaciones';

    protected $fillable = [
        'person_id', 'username', 'email', 'password','role_id','state'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function stateUser(){
        $user_state = $this->state;
        if($user_state == User::AVAILABLE){
            return User::AVAILABLE;
        }elseif($user_state == User::PERMIT){
            return User::PERMIT;
        }else{
            return User::HOLIDAY;
        }
    }

    public static function roleUser(){
        return auth()->user()->role->name;
    }

    //relaciones

    public function person(){
        return $this->belongsTo(Person::class);
    }

    public function employee(){
        return $this->hasOne(Employee::class);
    }

    public function supervisor(){
        return $this->hasOne(Supervisor::class);
    }

    public function linedirector(){
        return $this->hasOne(LineDirector::class);
    }

    public function managingdirector(){
        return $this->hasOne(ManagingDirector::class);
    }

    public function traces(){
        return $this->hasMany(Trace::class);
    }

    public function userday(){
        return $this->hasOne(UserDay::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

}
