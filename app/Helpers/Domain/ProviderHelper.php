<?php 

namespace App\Helpers\Domain;

use App\Models\Domain\Provider;
use App\Models\Resources\Contacts;
use App\Models\Integration\Integration;
use App\Modles\Accounting\PaymentProfile;

class ProviderHelper{

    public function create(Contacts $contact , Intgration $integration , PaymentProfile $payment_profile , $data=[]){
        $provider = new Provider;
        $provider->account_name = $data['account_name'] ?? "Untitled";
        $provider->email = $data['email'] ?? "";
        $provider->password = $data['password'] ?? "";
        $provider->username = $data['username'] ?? "";
        $provider->notes = $data['notes'] ?? "";
        $provider->status = $data['status'] ?? "";
        $provider->contact_id = $contact->id;
        $provider->integration_id = $integration->id;
        $provider->payment_profile_id = $payment_profile->id;
        $provider->save();
        return $provider;
    }

    public static function update(Provider $provider, Contacts $contact, Intgration $integration , PaymentProfile $payment_profile , $data=[]){
        $provider->account_name = $data['account_name'] ?? $provider->account_name;
        $provider->email = $data['email'] ?? $provider->email;
        $provider->password = $data['password'] ?? $provider->password;
        $provider->username = $data['username'] ?? $provider->username;
        $provider->notes = $data['notes'] ?? $provider->notes;
        $provider->status = $data['status'] ?? $provider->status;
        $provider->contact_id = $contact->id ?? $provider->contact_id;
        $provider->integration_id = $integration->id ?? $provider->integration_id;
        $provider->payment_profile_id = $payment_profile->id ?? $provider->payment_profile_id;
        $provider->save();
        return $provider;
    } 

    public static function delete(Provider $provider){
        return $provider->delete();
    }
}