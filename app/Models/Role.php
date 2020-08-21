<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

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
            'slug' => [
                'source' => 'role_name'
            ]
        ];
    }
}
