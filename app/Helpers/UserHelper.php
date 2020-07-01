<?php 
namespace App\Helpers;

use App\User;
use App\Models\Location\Timezone;
use App\Models\Tracker\AffiliateNetwork;
use App\Models\Tracker\TrafficSource;
use App\Models\Affiliate\Account;
use App\Models\Domain\Domain;
use App\Models\Tracker\Lander;
use App\Models\Tracker\Offer;
use App\Models\Agency;
use App\Models\Resource\Department;
use App\Models\Resource\Designation;
use App\Models\Resource\Team;
use App\Models\Accounting\BillingInformation;

class UserHelper{
    
    public static function create(Timezone $timzone,AffiliateNetwork $affiliate_network = null,
    TrafficSource $traffic_source = null,Account $account= null,Domain $domain= null,Lander $lander= null,
    Offer $offer=null,Agency $agency= null,Department $department=null,Designation $designation=null,Team $team=null,BillingInformation $billlinginformation = null,$data=[]){
        $user = new User;
        $user->name = $data['name'] ?? "";
        $user->username = $data['username'] ?? "";
        $user->bio = $data['bio'] ?? "";
        $user->email = $data['email'] ?? "";
        $user->password = $data['password'] ?? "";
        $user->phone = $data['phone'] ?? "";
        $user->status = $data['status'] ?? "";
        $user->timezone_id = $timezone->id;
        $user->notes = $data['notes'] ?? "";
        $user->save();
        $affiliate_network->workspaces()->sync([$user->id]);
        $traffic_source->workspaces()->sync([$user->id]);
        $account->workspaces()->sync([$user->id]);
        $domain->workspaces()->sync([$user->id]);
        $lander->workspaces()->sync([$user->id]);
        $offer->workspaces()->sync([$user->id]);

        $agency->workspaces()->sync([$user->id]);
        $department->workspaces()->sync([$user->id]);
        $designation->workspaces()->sync([$user->id]);
        $team->workspaces()->sync([$user->id]);
        $billlinginformation->workspaces()->sync([$user->id]);
        return $user;
    }

    public static function update(User $user,Timezone $timzone,$data=[]){
        $user->name = $data['name'] ?? $user->name;
        $user->username = $data['username']??$user->username;
        $user->bio = $data['bio'] ?? $user->bio;
        $user->email = $data['email'] ?? $user->email;
        $user->password = $data['password'] ?? $user->password;
        $user->phone = $data['phone'] ?? $user->phone;
        $user->status = $data['status'] ??  $user->status;
        $user->timezone_id = $timezone->id ?? $user->timezone_id;
        $user->notes = $data['notes'] ?? $user->notes;
        $user->save();
        return $user;
    }

    public static function delete(User $user){
        return $user->delete();
    }
}