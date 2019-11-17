<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function numbers()
    {
        return $this->hasMany('App\Number', 'city_id', 'id');
    }
}
