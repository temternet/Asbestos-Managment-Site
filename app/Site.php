<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Site extends Model
{
    protected $table = 'Site';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'siteID', 'addressL1', 'addressL2', 'town', 'county', 'postCode', 'lAuth',
    ];

   /* protected $guarded = [
        'userID',  'certExpiry',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function premise()
    {
        return $this->hasMany('App\Premises');
    }

    public $timestamps = false;
}
