<?php 

namespace App\Helpers\Domain;

use App\Models\Domain\Domain;
use App\Models\Domain\Provider;


class DomainHelper{

    public static function create(Provider $provider,$data=[]){
        $domain = new Domain;
        $domain->type = $data['type'] ?? "";
        $domain->domain = $data['domain'] ?? "";
        $domain->logo = $data['logo'] ?? "";
        $domain->expiry_date = $data['expiry_date']?? "";
        $domain->renewal_date = $data['renewal_date'] ?? "";
        $domain->name_server1 = $data['name_server1'] ?? "";
        $domain->name_server2 = $data['name_server2'] ?? "";
        $domain->status = $data['status'] ?? "";
        $domain->domain_provider_id = $provider->id;
        $domain->save();
        return $domain;
    }

    public static function update(Domain $domain,Provider $provider,$data=[]){
    $domain->type = $data['type'] ?? $domain->type;
    $domain->domain = $data['domain'] ?? $domain->domain;
    $domain->logo = $data['logo'] ?? $domain->logo;
    $domain->expiry_date = $data['expiry_date']?? $domain->expiry_date;
    $domain->renewal_date = $data['renewal_date'] ??$domain->renewal_date;
    $domain->name_server1 = $data['name_server1'] ?? $domain->name_server1;
    $domain->name_server2 = $data['name_server2'] ?? $domain->name_server2;
    $domain->status = $data['status'] ?? $domain->status;
    $domain->domain_provider_id = $provider->id ?? $domain->domain_provider_id;
    $domain->save();
    return $domain;
    }

    public function delete(Domain $domain){
        return $domain->delete();
    }
}

