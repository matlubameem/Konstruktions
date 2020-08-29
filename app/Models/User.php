<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Current user full name
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }

    /**
     * Get the role that owns the user.
     */
    public function role()
    {
        return $this->belongsTo(Role::class,'role_id','id');
    }

    /**
     * Get the activities for the user.
     */
    public function activities()
    {
        return $this->hasMany(Activity::class,'activity_of_user_id','id');
    }

    /**
     * @return bool
     */
    public function isDeveloper()
    {
        return $this->role->role_slug === 'developer';
    }

    /**
     * @return bool
     */
    public function isAdmin()
    {
        return $this->role->role_slug === 'administrator';
    }

    /**
     * @return bool
     */
    public function isManager()
    {
        return $this->role->role_slug === 'manager';
    }

    /**
     * @return bool
     */
    public function isAccountant()
    {
        return $this->role->role_slug === 'accountant';
    }
}
