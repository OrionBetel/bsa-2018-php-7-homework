<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email'];
    
    public function wallet()
    {
        return $this->hasOne('App\Entity\Wallet');
    }
}
