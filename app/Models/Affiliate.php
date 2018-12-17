<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;


class Affiliate extends  Authenticatable
 {
        use Notifiable;

        protected $guard = 'affiliate';

        protected $fillable = [
            'user_id','name','username', 'email', 'password', 'ip_address','isadmin',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }