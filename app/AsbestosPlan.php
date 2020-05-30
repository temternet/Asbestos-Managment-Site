<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AsbestosPlan extends Model
{
    //
    protected $table = 'asbestos_plans';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'planID', 'premisesID', 'monitorDate', 'userID', 'commPlan',
    ];

   /* protected $guarded = [
        'userID',  'certExpiry',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function premise()
    {
        return $this->belongsTo('App\Premises');
    }

    public function records()
    {
        return $this->hasMany('App\AsbestosRecord');
    }

    public $timestamps = false;
}
