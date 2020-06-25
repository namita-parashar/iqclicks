<?php 
namespace App\Helpers\Affiliate;

use App\Models\Accounting\PaymentProfile;
use App\Models\Agencies;
use App\Models\TrafficSource\Accounts;
use App\Models\Tracker\TrafficSource;

class AccountsHelper{

    public static function create(PaymentProfile $payment_profile , Agencies $agency ,TrafficSource $traffic_source,$data=[] ){
        $traffic_source_accounts = new Accounts;
        $traffic_source_accounts->name = $data['name'] ?? "";
        $traffic_source_accounts->account_id = $data['account_id'] ?? "";
        $traffic_source_accounts->tracker_traffic_source_id = $traffic_source->id ?? "";
        $traffic_source_accounts->payment_profile_id = $payment_profile->id;
        $traffic_source_accounts->agency_id = $agency->id;
        $traffic_source_accounts->save();
        return $traffic_source_accounts;
    }

    public static function update(Accounts $traffic_source_accounts,PaymentProfile $payment_profile , Agencies $agency ,TrafficSource $traffic_source,$data=[]){
        $traffic_source_accounts->name = $data['name'] ?? "";
        $traffic_source_accounts->account_id = $data['account_id'] ?? $traffic_source_accounts->account_id;
        $traffic_source_accounts->tracker_traffic_source_id = $traffic_source->id ?? $traffic_source_accounts->tracker_traffic_source_id ;
        $traffic_source_accounts->payment_profile_id = $payment_profile->id ?? $traffic_source_accounts->payment_profile_id;
        $traffic_source_accounts->agency_id = $agency->id ?? $traffic_source_accounts->agency_id;
        $traffic_source_accounts->save();
        return $traffic_source_accounts;
    }

    public static function delete(Accounts $traffic_source_accounts){
        return $traffic_source_accounts->delete();
    }
}