<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $table = 'password_resets';

    protected $fillable = [
    	'email',
    	'token'
    ];

    protected $hidden = [
    	'updated_at',
    ];

    public function getRouteKeyName()
    {
    	return 'token';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
