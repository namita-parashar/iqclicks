<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class LanderOffer extends Model
{
    //
    protected $table = 'tracker_lander_offer';
    
    public function trackerPaths(){
        return $this->morphToMany('App\Models\Tracker\Path','linkable');
    }
}
