<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{
    use SoftDeletes; 
    use Notifiable;

    public $timestamps  = true;
    protected $table    = 'users';
    protected $fillable = ['matricula','name','email','password'];
    protected $hidden   = ['password', 'remember_token'];
}