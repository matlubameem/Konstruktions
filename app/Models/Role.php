<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Cviebrock\EloquentSluggable\Sluggable;
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
<<<<<<< HEAD
    //
=======
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
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
}
