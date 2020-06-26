<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function workspaceTrackerMemberAsset(){
        return $this->belongsTo('App\Models\Workspace\WorkspaceTracker\MemberAsset');
    }
    public function affiliateNetworks(){
        return $this->morphedByMany('App\Models\Affiliate\Network','assetable');
    }
    public function affiliateAccounts(){
        return $this->morphedByMany('App\Models\Affiliate\Accounts','assetable');
    }
    public function trafficSources(){
        return $this->morphedByMany('App\Models\TrafficSource\TrafficSource','assetable');
    }
    public function domains(){
        return $this->morphedByMany('App\Models\Domain\Domain','assetable');
    }
    public function trackerLanders(){
        return $this->morphedByMany('App\Models\Tracker\Lander','assetable');
    }
    public function affiliateOffers(){
        return $this->morphedByMany('App\Models\Affiliate\Offer','assetable');
    }
     public function agencies(){
        return $this->morphedByMany('App\Models\Agency','assetable');
    }
    public function departments(){
        return $this->morphedByMany('App\Models\Resource\Department','assetable');
    }
    public function designations(){
        return $this->morphedByMany('App\Models\Resource\Designation','assetable');
    }
    public function teams(){
        return $this->morphedByMany('App\Models\Resource\Team','assetable');
    }
    public function billingInformations(){
        return $this->morphedByMany('App\Models\Accounting\BillingInformation','assetable');
    }
    public function workspaces(){
        return $this->morphToMany('App\Models\Workspace\Workspace','memberable');
    }
    public function timezones(){
        return $this->hasMany('App\Models\Location\Timezone');
    }
}
