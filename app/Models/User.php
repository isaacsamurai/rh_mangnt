<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function detail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
