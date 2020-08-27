<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $guarded = [];

    const CREATED_AT = false;

    public function activityBy()
    {
        return $this->belongsTo(User::class,'activity_of_user_id','id');
    }

}
