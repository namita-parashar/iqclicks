<?php 
namespace App\Helpers\Affiliate;

use App\Models\Accounting\PaymentProfile;
use App\Models\Agency;
use App\Models\TrafficSource\Account;
use App\Models\Tracker\TrafficSource;

class AccountHelper{

    public static function create(PaymentProfile $payment_profile , Agency $agency ,TrafficSource $traffic_source,$data=[] ){
        $traffic_source_accounts = new Account;
        $traffic_source_accounts->name = $data['name'] ?? "";
        $traffic_source_accounts->account_id = $data['account_id'] ?? "";
        $traffic_source_accounts->tracker_traffic_source_id = $traffic_source->id ?? "";
        $traffic_source_accounts->payment_profile_id = $payment_profile->id;
        $traffic_source_accounts->agency_id = $agency->id;
        $traffic_source_accounts->save();
        return $traffic_source_accounts;
    }

    public static function update(Account $traffic_source_accounts,PaymentProfile $payment_profile , Agency $agency ,TrafficSource $traffic_source,$data=[]){
        $traffic_source_accounts->name = $data['name'] ?? "";
        $traffic_source_accounts->account_id = $data['account_id'] ?? $traffic_source_accounts->account_id;
        $traffic_source_accounts->tracker_traffic_source_id = $traffic_source->id ?? $traffic_source_accounts->tracker_traffic_source_id ;
        $traffic_source_accounts->payment_profile_id = $payment_profile->id ?? $traffic_source_accounts->payment_profile_id;
        $traffic_source_accounts->agency_id = $agency->id ?? $traffic_source_accounts->agency_id;
        $traffic_source_accounts->save();
        return $traffic_source_accounts;
    }

    public static function delete(Account $traffic_source_accounts){
        return $traffic_source_accounts->delete();
    }
}