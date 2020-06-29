<?php
namespace App\Helpers\Affiliate;

use App\Models\Affiliate\Offer;
use App\Models\Location\Country;
use App\Models\Device;
use App\Models\Language;
use App\Models\Location\State;
use App\Models\Affiliate\Network;

class OfferHelper{

    public  static function create(Country $country=null,Device $device =null,Language $language=null,State $state=null,Network $network=null,$data=[]){
        $affiliate_offers = new Offer;
        $affiliate_offers->name = $data['name'] ?? "";
        $affiliate_offers->offer_url = $data['url'] ?? "";
        $affiliate_offers->notes = $data['notes'] ?? "";
        $affiliate_offers->save();
        $country->offers()->sync([$affiliate_offers->id]);
        $device->offers()->sync([$affiliate_offers->id]);
        $language->offers()->sync([$affiliate_offers->id]);
        $state->offers()->sync([$affiliate_offers->id]);
        $network->offers()->sync([$affiliate_offers->id]);
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