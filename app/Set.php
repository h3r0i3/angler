<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
