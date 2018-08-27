<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

	use Notifiable;

    protected $table = 'users';

    protected $fillable = [
    	'name',
    	'email',
    	'password',
    	'image_filename',
    	'role',
    ];


    public function resets()
    {
    	return $this->hasOne(PasswordReset::class);
    }
}
