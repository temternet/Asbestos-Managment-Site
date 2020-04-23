<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AsbestosRecord extends Model
{
    //
    protected $table = 'AsbestosRecord';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'asbestosID', 'premisesID', 'location', 'product', 'area', 'surfaceCoating',
        'asbestosCondition', 'accessibility', 'asbestosType', 'comments', 
        'materialScore', 'priorityScore', 'planID', 'action', 'actionDate', 'deligate',
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
        return $this->belongsTo('App\Premises');
    }

    public function plans()
    {
        return $this->hasOne('App\AsbestosPlan');
    }

    public $timestamps = false;
}
