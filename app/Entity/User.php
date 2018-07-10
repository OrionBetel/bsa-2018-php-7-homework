<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function wallet()
    {
        return $this->hasOne('App\Entity\Wallet');
    }
}
