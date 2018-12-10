<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['reportTitle','reportDescription','file_url','tenure_from','tenure_to','tenure_year','city'];
}
