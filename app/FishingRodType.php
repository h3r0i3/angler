<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FishingRodType extends Model
{
    public $timestamps = true;

    public function fishingRods()
    {
        return $this->hasMany('App\FishingRod');
    }
}
