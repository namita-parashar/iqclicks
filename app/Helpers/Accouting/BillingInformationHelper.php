<?php 
namespace App\Helpers\Accounting;

use App\Models\Agency;
use App\Models\Accounting\BillingInformation;

class BillingInformationHelper{

    public static function create(Agency $agency , $data=[]){
        $billing = new BillingInformation;
        $billing->name = $data['name'] ?? "";
        $billing->tax_id = $data['tax_id'] ?? "";
        $billing->address = $data['address'] ?? "";
        $billing->city = $data['city'] ?? "";
        $billing->country = $data['country'] ?? "";
        $billing->agency_id = $agency->id;
        $billing->save();
        return $billing;

    }

    public static function update(BillingInformation $billing ,Agency $agency , $data=[]){
        $billing->name = $data['name'] ?? $billing->name;
        $billing->tax_id = $data['tax_id'] ?? $billing->tax_id;
        $billing->address = $data['address'] ?? $billing->address;
        $billing->city = $data['city'] ?? $billing->city;
        $billing->country = $data['country'] ?? $billing->country;
        $billing->agency_id = $agency->id ?? $billing->agency_id;
        $billing->save();
        return $billing;
    }
    public static function delete(BillingInformation $billing){
        return $billing->delete();
    }
}