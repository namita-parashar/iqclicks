<?php

namespace App\Helpers;

use App\Models\Integration\Integration;
use App\Models\Tracker\TrafficSource;
use App\Models\TrafficSource\Account;
use App\Models\Affiliate\Account as AffiliateAccounts;
use App\Models\Domain\Provider;

class IntegrationHelper{

    public static function create(AffiliateAccounts $affiliate_account=null,Account $traffic_source_account= null,Provider $provider= null, $data=[]){
        $integration = new Integration;
        $integration->name = $data['name'] ?? "";
        $integration->category = $data['category']  ?? "";
        $integration->logo = $data['logo'] ?? "";
        $integration->description = $data['description'] ?? "";
        $integration->save();
        $affiliate_account->integrations()->sync([$integration->id]);
        $traffic_source_account->integrations()->sync([$integration->id]);
        $provider->integrations()->sync([$integration->id]);
        return $integration;
    }

    public static function update(Integration $integration, $data=[]){
        $integration->name = $data['name'] ?? $integration->name;
        $integration->category = $data['category']  ?? $integration->category;
        $integration->logo = $data['logo'] ?? $integration->logo;
        $integration->description = $data['description'] ?? $integration->description;
        $integration->save();
        return $integration;
    }

    public static function delete(Integration $integration){
        return $integration->delete();
    }

}