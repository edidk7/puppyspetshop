<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->surname}";
    }
}
