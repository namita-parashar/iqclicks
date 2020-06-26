<?php 
namespace App\Helpers;

use App\User;
use App\Models\Location\Timezone;

class UserHelper{

    public static function create(Timezone $timzone,$data=[]){
        $user = new User;
        $user->name = $data['name'] ?? "";
        $user->username = $data['username'] ?? "";
        $user->bio = $data['bio'] ?? "";
        $user->email = $data['email'] ?? "";
        $user->password = $data['password'] ?? "";
        $user->phone = $data['phone'] ?? "";
        $user->status = $data['status'] ?? "";
        $user->timezone_id = $timezone->id;
        $user->notes = $data['notes'] ?? "";
        $user->save();
        return $user;
    }

    public static function update(User $user,Timezone $timzone,$data=[]){
        $user->name = $data['name'] ?? $user->name;
        $user->username = $data['username']??$user->username;
        $user->bio = $data['bio'] ?? $user->bio;
        $user->email = $data['email'] ?? $user->email;
        $user->password = $data['password'] ?? $user->password;
        $user->phone = $data['phone'] ?? $user->phone;
        $user->status = $data['status'] ??  $user->status;
        $user->timezone_id = $timezone->id ?? $user->timezone_id;
        $user->notes = $data['notes'] ?? $user->notes;
        $user->save();
        return $user;
    }

    public static function delete(User $user){
        return $user->delete();
    }
}