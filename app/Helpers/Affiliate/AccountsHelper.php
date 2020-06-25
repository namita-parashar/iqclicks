<?php 
namespace App\Helpers\Affiliate;

use App\Models\Tracker\AffiliateNetwork;
use App\Models\Accounting\BankAccounts;
use App\Models\Agencies;
use App\Models\Affiliate\Accounts;

class AccountsHelper{

    public static function create(AffiliateNetwork $tracker_affiliate_network ,BankAccounts $bank_account, Agencies $agency,$data=[]){
        $affiliate_accounts = new Accounts;
        $affiliate_accounts->name = $data['name'] ?? "";
        $affiliate_accounts->account_id = $data['account_id'] ?? "";
        $affiliate_accounts->tracker_affiliate_network_id = $tracker_affiliate_network->id ?? "";
        $affiliate_accounts->bank_account_id = $bank_account->id;
        $affiliate_accounts->agency_id = $agency->id;
        $affiliate_accounts->save();
        return $affiliate_accounts;
    }

    public static function update(Accounts $affiliate_accounts ,AffiliateNetwork $tracker_affiliate_network ,BankAccounts $bank_account, Agencies $agency,$data=[] ){
        $affiliate_accounts->name = $data['name'] ?? $affiliate_accounts->name;
        $affiliate_accounts->account_id = $data['account_id'] ?? $affiliate_accounts->account_id;
        $affiliate_accounts->tracker_affiliate_network_id = $tracker_affiliate_network->id ?? $affiliate_accounts->tracker_affiliate_network_id;
        $affiliate_accounts->bank_account_id = $bank_account->id ?? $affiliate_accounts->bank_account_id;
        $affiliate_accounts->agency_id = $agency->id ?? $affiliate_accounts->agency_id;
        $affiliate_accounts->save();
        return $affiliate_accounts;
    }

    public static function delete(Accounts $affiliate_accounts){
        return $affiliate_accounts->delete();
    }

}