<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $guarded = [];

    // protected $appends = array('created_at');

    public function getCreatedAtAttribute($value)
    {
        $dt = Carbon::now();
        return $dt->diffForHumans($value);
    }
}
