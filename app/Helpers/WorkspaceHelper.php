<?php 
namespace App\Helpers;

use App\Models\Workspace;
use App\Models\Agency;
use App\Models\Tracker\AffiliateNetwork;
use App\Models\Tracker\TrafficSource;
use App\Models\Affiliate\Account;
use App\Models\Domain\Domain;
use App\Models\Tracker\Lander;
use App\Models\Tracker\Offer;

class WorkspaceHelper{

    public static function create(Agency $agency,AffiliateNetwork $affiliate_network = null,TrafficSource $traffic_source = null,Account $account= null,Domain $domain= null,Lander $lander= null,Offer $offer= null,$data = []){
        $workspace = new Workspace;
        $workspace->name = $data['name'] ?? "";
        $workspace->description = $data['description'] ?? "";
        $workspace->agency_id = $agency->id;
        $workspace->save();
        $affiliate_network->workspaces()->sync([$workspace->id]);
        $traffic_source->workspaces()->sync([$workspace->id]);
        $account->workspaces()->sync([$workspace->id]);
        $domain->workspaces()->sync([$workspace->id]);
        $lander->workspaces()->sync([$workspace->id]);
        $offer->workspaces()->sync([$workspace->id]);
        return $workspace;
    }
    public static function update(Workspace $workspace,Agency $agency,$data = []){
        $workspace->name = $data['name'] ?? $workspace->name;
        $workspace->description = $data['description'] ?? $workspace->description;
        $workspace->agency_id = $agency->id ?? $workspace->agency_id;
        $workspace->save();
        return $workspace;
    }

    public static function delete(Workspace $workspace){
        return $workspace->delete();
    }
}