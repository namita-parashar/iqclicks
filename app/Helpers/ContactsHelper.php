<?php

namespace App\Helpers;

use App\Models\Resources\Contacts;

class ContactsHelper{

    public static function create($data=[]){
        $contacts = new Contacts;
        $contacts->name = $data['name'] ?? "";
        $contacts->email = $data['email'] ?? "";
        $contacts->phone = $data['phone'] ??"";
        $contacts->skype = $data['skype'] ?? "";
        $contacts->address = $data['address'] ?? "";
        $contacts->zipcode = $data['zipcode'] ?? "";
        $contacts->street = $data['street'] ?? "";
        $contacts->city = $data['city'] ?? "";
        $contacts->country = $data['country'] ?? "";
        $contacts->save();
        return $contacts;
    }

    public static function update(Contacts $contacts, $data = []){
        $contacts->name = $data['name'] ?? $contacts->name;
        $contacts->email = $data['email'] ?? $contacts->email;
        $contacts->phone = $data['phone'] ??$contacts->phone;
        $contacts->skype = $data['skype'] ?? $contacts->skype;
        $contacts->address = $data['address'] ?? $contacts->address;
        $contacts->zipcode = $data['zipcode'] ??$contacts->zipcode;
        $contacts->street = $data['street'] ?? $contacts->street;
        $contacts->city = $data['city'] ?? $contacts->city;
        $contacts->country = $data['country'] ?? $contacts->country ;
        $contacts->save();
        return $contacts;
    }

    public static function delete(Contacts $contacts){
        return $contacts->delete();
    }
}