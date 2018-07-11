<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Money extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function wallet()
    {
        return $this->belongsTo('App\Entity\Wallet');
    }

    public function currency()
    {
        return $this->belongsTo('App\Entity\Currency');
    }
}
