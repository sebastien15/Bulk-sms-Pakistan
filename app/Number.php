<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
     public function cities()
     {
         return $this->belongsTo('App\City', 'id');
     }
}
