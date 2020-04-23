<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Premises extends Model
{
    //
    protected $table = 'Premises';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'premisesID', 'siteID', 'userID', 'orgName', 'premisesAdr',
    ];

   /* protected $guarded = [
        'userID',  'certExpiry',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public $timestamps = false;
}
