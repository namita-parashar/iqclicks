<?php 
namespace App\Helpers\Tracker;

use App\Models\Tracker\Lander;
use App\Models\Tracker\Flow;
use App\Models\Workspace\Workspace;

class FlowHelper{

    public static function create(Workspace $workspace,Lander $lander = null,$data=[]){
        $flow =new Flow();
        $flow->name = $data['name'] ?? "";
        $flow->type = $data['type'] ?? "";
        $flow->redirect_mode = $data['redirect_mode'] ?? "";
        $flow->notes = $data['notes'] ?? "";
        $flow->lander_id = $lander->id;
        $flow->workspace_id = $workspace->id;
        $flow->save();
        return $flow;
    }

    public static function update(Flow $flow,Workspace $workspace,Lander $lander = null,$data=[]){
        $flow->name = $data['name'] ?? $flow->name;
        $flow->type = $data['type'] ?? $flow->type;
        $flow->redirect_mode = $data['redirect_mode'] ?? $flow->redirect_mode;
        $flow->notes = $data['notes'] ?? $flow->notes;
        $flow->lander_id = $lander->id ?? $flow->lander_id;
        $flow->workspace_id = $workspace->id ?? $flow->workspace_id;
        $flow->save();
        return $flow;
    }

    public static function delete(Flow $flow){
        return $flow->delete();
    }
}