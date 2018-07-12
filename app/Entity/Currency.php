<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'currency';
    
    protected $fillable = ['name'];

    public function money()
    {
        return $this->hasMany('App\Entity\Money');
    }
}
