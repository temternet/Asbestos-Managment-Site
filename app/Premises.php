<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Premises extends Model
{
    //
    protected $table = 'premises';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'premisesID', 'siteID', 'userID', 'orgID', 'premisesAdr',
    ];

   /* protected $guarded = [
        'userID',  'certExpiry',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function org()
    {
        return $this->belongsTo('App\Organisation');
    }

    public function site()
    {
        return $this->belongsTo('App\Site');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function records()
    {
        return $this->hasMany('App\AsbestosRecord');
    }

    public function plans()
    {
        return $this->hasOne('App\AsbestosPlan');
    }

    public $timestamps = false;
}
