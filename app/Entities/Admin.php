<?php

namespace App\Entities;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\Admin as Authenticatable;


/**
 * Class Admin.
 *
 * @package namespace App\Entities;
 */
class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    public $timestamps  = true;
    protected $table    = 'admins';
    protected $fillable = ['name','email','password'];
    protected $hidden   = ['password', 'remember_token'];

}
