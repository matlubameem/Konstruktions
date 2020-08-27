<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use Sluggable;

    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }

    /**
     * @return array
     */
    public function sluggable()
    {
        return [
            'role_slug' => [
                'source' => 'role_name'
            ]
        ];
    }
}
