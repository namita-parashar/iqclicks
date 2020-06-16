<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class RuleConditions extends Model
{
    //
    protected $table = 'tracker_rule_conditions';

    public function trackerRules(){
      return $this->hasMany('App\Models\Tracker\Rules');
    }
}
