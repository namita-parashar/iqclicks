<?php 
namespace App\Helpers\Accounting;

use App\Models\Agency;
use App\Models\Accounting\Company;

class CompanyHelper{

    public static function create(Agency $agency,$data=[]){
        $company = new Company;
        $company->name = $data['name'] ?? "";
        $company->is_agency_owner = $data['is_agency_owner'] ?? "1";
        $company->description = $data['description'] ?? "";
        $company->address = $data['address'] ?? "";
        $company->country = $data['country'] ?? "";
        $company->notes  = $data['notes'] ?? "";
        $company->agency_id = $agency->id;
        $company->save();
        return $company;
    }
    public static function update(Company $company,Agency $agency,$data=[]){
        $company->name = $data['name'] ?? $company->name ;
        $company->is_agency_owner = $data['is_agency_owner'] ?? $company->is_agency_owner;
        $company->description = $data['description'] ?? $company->description;
        $company->address = $data['address'] ?? $company->address ;
        $company->country = $data['country'] ?? $company->country;
        $company->notes  = $data['notes'] ?? $company->notes;
        $company->agency_id = $agency->id;
        $company->save();
        return $company;
    }
    public static function delete(Company $company){
        return $company->delete();
    }

}