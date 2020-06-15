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
        $dt = Carbon::createFromDate($value);

        return $dt->diffForHumans();
    }
}
