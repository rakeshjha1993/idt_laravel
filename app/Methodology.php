<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Methodology extends Model
{
    //
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['body','for_year','city'];
}
