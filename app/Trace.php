<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Trace extends Model
{
    const PERMIT = 'permiso';
    const HOLIDAY = 'vacacion';

    protected $fillable = [
        'user_id',
        'type',
        'description'
    ];

    public function typeTrace(){
        $type = $this->type;
        if($type == Trace::PERMIT){
            return Trace::PERMIT;
        }else{
            return Trace::HOLIDAY;
        }
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
