<?php 
namespace App\Helpers\Affiliate;

use App\Models\Tracker\AffiliateNetwork;
use App\Models\Accounting\BankAccount;
use App\Models\Agency;
use App\Models\Affiliate\Account;

class AccountHelper{

    public static function create(AffiliateNetwork $tracker_affiliate_network ,BankAccount $bank_account, Agency $agency,$data=[]){
        $affiliate_accounts = new Account;
        $affiliate_accounts->name = $data['name'] ?? "";
        $affiliate_accounts->account_id = $data['account_id'] ?? "";
        $affiliate_accounts->tracker_affiliate_network_id = $tracker_affiliate_network->id ?? "";
        $affiliate_accounts->bank_account_id = $bank_account->id;
        $affiliate_accounts->agency_id = $agency->id;
        $affiliate_accounts->save();
        $affiliate_accounts->trackerOffers()->sync([$affiliate_accounts->id]);
        return $affiliate_accounts;
    }

    public static function update(Account $affiliate_accounts ,AffiliateNetwork $tracker_affiliate_network ,BankAccounts $bank_account, Agencies $agency,$data=[] ){
        $affiliate_accounts->name = $data['name'] ?? $affiliate_accounts->name;
        $affiliate_accounts->account_id = $data['account_id'] ?? $affiliate_accounts->account_id;
        $affiliate_accounts->tracker_affiliate_network_id = $tracker_affiliate_network->id ?? $affiliate_accounts->tracker_affiliate_network_id;
        $affiliate_accounts->bank_account_id = $bank_account->id ?? $affiliate_accounts->bank_account_id;
        $affiliate_accounts->agency_id = $agency->id ?? $affiliate_accounts->agency_id;
        $affiliate_accounts->save();
        return $affiliate_accounts;
    }

    public static function delete(Account $affiliate_accounts){
        return $affiliate_accounts->delete();
    }

}