<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FishingRod extends Model
{
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function fishingRodType()
    {
        return $this->belongsTo('App\FishingRodType');
    }
}
