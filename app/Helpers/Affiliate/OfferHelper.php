<?php
namespace App\Helpers\Affiliate;

use App\Models\Affiliate\Offer;

class OfferHelper{

    public  static function create($data=[]){
        $affiliate_offers = new Offer;
        $affiliate_offers->name = $data['name'] ?? "";
        $affiliate_offers->offer_url = $data['url'] ?? "";
        $affiliate_offers->notes = $data['notes'] ?? "";
        $affiliate_offers->save();
        return $affiliate_offers;
    }

    public static function update(Offer $affiliate_offers , $data=[]){
        $affiliate_offers->name = $data['name'] ?? $affiliate_offers->name;
        $affiliate_offers->offer_url = $data['url'] ?? $affiliate_offers->offer_url;
        $affiliate_offers->notes = $data['notes'] ?? $affiliate_offers->notes;
        $affiliate_offers->save();
        return $affiliate_offers;
    }

    public static function delete(Offer $affiliate_offers){
        return $affiliate_offers->delete();
    }
}