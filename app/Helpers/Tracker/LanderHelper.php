<?php 
namespace App\Helpers\Tracker;

use App\Models\Tracker\Lander;
use App\Models\Location\Country;
use App\Models\Domain\Domain;

class LanderHelper{

    public static function create(Country $country,Domain $domain,$data=[]){
        $tracker_lander = new Lander;
        $tracker_lander->url = $data['url'] ?? "";
        $tracker_lander->name = $data['name'] ?? "";
        $tracker_lander->number_of_cta = $data['cta'] ??"";
        $tracker_lander->type = $data['type'] ?? "";
        $tracker_lander->country_id = $country->id;
        $tracker_lander->domain_id = $domain->id;
        $tracker_lander->is_redirectless = $data['is_redirectless'] ?? '1';
        $tracker_lander->notes = $data['notes'] ?? "";
        $tracker_lander->save();
        $tracker_lander->affiliateOffers()->sync([$tracker_lander->id]);
        return $tracker_lander;
    }

    public static function update(Lander $tracker_lander,Country $country,Domain $domain,$data=[] ){
        $tracker_lander->url = $data['url'] ?? $tracker_lander->url;
        $tracker_lander->name = $data['name'] ??$tracker_lander->name;
        $tracker_lander->number_of_cta = $data['cta'] ?? $tracker_lander->number_of_cta;
        $tracker_lander->type = $data['type'] ??$tracker_lander->type;
        $tracker_lander->country_id = $country->id ?? $tracker_lander->country_id;
        $tracker_lander->domain_id = $domain->id ?? $tracker_lander->domain_id;
        $tracker_lander->is_redirectless = $data['is_redirectless'] ?? $tracker_lander->is_redirectless;
        $tracker_lander->notes = $data['notes'] ?? $tracker_lander->notes;
        $tracker_lander->save();
        return $tracker_lander;
    }

    public static function delete(Lander $tracker_lander){
        return $tracker_lander->delete();
    }
}