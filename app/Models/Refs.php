<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refs extends Model
{
       protected $fillable = [
            'user_id','ref_id'
        ];

}
