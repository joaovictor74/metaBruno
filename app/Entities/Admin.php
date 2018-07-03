<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable{
    use SoftDeletes; 
    use Notifiable;

    protected $guard = 'admin';

    public $timestamps  = true;
    protected $table    = 'admin';
    protected $fillable = ['name','email','password'];
    protected $hidden   = ['password', 'remember_token'];
}