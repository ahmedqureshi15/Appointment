<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnBoarding extends Model
{
    //
    protected $fillable = ['program','is_approved','is_interview_booked','alert'];
}
