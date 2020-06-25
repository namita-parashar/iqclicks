<?php
namespace App\Helpers\Affiliate;

use App\Models\Affiliate\Offers;

class OffersHelper{

    public  static function create($data=[]){
        $affiliate_offers = new Offers;
        $affiliate_offers->name = $data['name'] ?? "";
        $affiliate_offers->offer_url = $data['url'] ?? "";
        $affiliate_offers->notes = $data['notes'] ?? "";
        $affiliate_offers->save();
        return $affiliate_offers;
    }

    public static function update(Offers $affiliate_offers , $data=[]){
        $affiliate_offers->name = $data['name'] ?? $affiliate_offers->name;
        $affiliate_offers->offer_url = $data['url'] ?? $affiliate_offers->offer_url;
        $affiliate_offers->notes = $data['notes'] ?? $affiliate_offers->notes;
        $affiliate_offers->save();
        return $affiliate_offers;
    }

    public static function delete(Offers $affiliate_offers){
        return $affiliate_offers->delete();
    }
}