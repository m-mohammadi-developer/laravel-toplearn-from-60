<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    public function posts()
    {
        return $this->hasManyThrough('App\Post', 'App\User');

        /* 
        return $this->hasManyThrough(
            'App\Post',
            'App\User',
            'country_id :: foreign key in users table',
            'user_id :: foreign key in posts table',
            'id :: local key countries',
            'id :: localkey users table'
        ); 
        */
    }
}
