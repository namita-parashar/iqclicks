<?php

namespace App\Models\Workspace\WorkspaceTracker;

use Illuminate\Database\Eloquent\Model;

class MemberAsset extends Model
{
    //
    protected $table = 'workspace_tracker_member_assets';

    public function users(){
        return $this->hasMany('App\User');
    }
}
