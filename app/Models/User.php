<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable {
    use Notifiable, HasApiTokens;

    protected $fillable = [
        'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token', 'created_at'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function subjects(){
        //return $this->belongsTo(Driver::class, 'idSubjects');
        //return $this->belongsTo(Subject::class, 'idSubjects', 'id');
        //return $this->belongsTo('App/Models/Subject', 'idSubjects', 'id');
        //return $this->hasOne('App\Models\Subject', 'idSubjects');
        return $this->hasOne(Subject::class,'id','idSubjects');
    }
    public function drivers(){
        //return $this->belongsTo(Driver::class, 'idSubjects');
        //return $this->belongsTo(Subject::class, 'idSubjects', 'id');
        //return $this->belongsTo('App/Models/Subject', 'idSubjects', 'id');
        return $this->hasOne('App\Models\Driver', 'idDrivers');
    }
}
