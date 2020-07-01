<?php 
namespace App\Helpers\Tracker;

use App\Models\Tracker\Campaign;
use App\Models\Domain\Domain;
use App\Models\Tracker\Lander;
use App\Models\Tracker\Flow;
use App\Models\Tracker\TrafficSource;
use App\Models\TrafficSource\Account;
use App\Models\Workspace\Workspace;

class CampaignHelper{

    public static function create(Domain $domain,TrafficSource $traffic_source,Account $account,Workspace $workspace,Lander $lander = null,Flow $flow=null,$data=[] ){
        $campaign = new Campaign;
        $campaign->parent_group_id = $data['parent_group_id'] ?? "";
        $campaign->domain_id = $domain->id;
        $campaign->lander_id = $lander->id;
        $campaign->tracker_flow_id = $flow->id;
        $campaign->slug =$data['slug'] ?? "";
        $campaign->name = $data['name'] ?? "";
        $campaign->type =$data['type'] ?? "";
        $campaign->redirect_mode = $data['redirect_mode'] ?? "";
        $campaign->notes =$data['notes'] ?? "";
        $campaign->workspace_id = $workspace->id;
        $campaign->tracker_ts_id = $traffic_source->id;
        $campaign->ts_account_id = $account->id;
        $campaign->save();
        $campaign->trackerRules()->sync([$campaign->id]);
        $campaign->landers()->sync([$campaign->id]);
        return $campaign;
    }

    public static function update(Campaign $campaign,Domain $domain,TrafficSource $traffic_source,Account $account,Workspace $workspace,Lander $lander = null,Flow $flow=null,$data=[] ){
        $campaign->parent_group_id = $data['parent_group_id'] ?? $campaign->parent_group_id;
        $campaign->domain_id = $domain->id ?? $campaign->domain_id;
        $campaign->lander_id = $lander->id ?? $campaign->lander_id;
        $campaign->tracker_flow_id = $flow->id ?? $campaign->tracker_flow_id;
        $campaign->slug =$data['slug'] ?? $campaign->slug;
        $campaign->name = $data['name'] ?? $campaign->name;
        $campaign->type =$data['type'] ?? $campaign->type;
        $campaign->redirect_mode = $data['redirect_mode'] ?? $campaign->redirect_mode;
        $campaign->notes =$data['notes'] ?? $campaign->notes;
        $campaign->workspace_id = $workspace->id ?? $campaign->workspace_id;
        $campaign->tracker_ts_id = $traffic_source->id ??$campaign->tracker_ts_id;
        $campaign->ts_account_id = $account->id ?? $campaign->ts_account_id;
        $campaign->save();
        return $campaign;
    }
    public static function delete(Campaign $campaign){
        return $campaign->delete();
    }
}