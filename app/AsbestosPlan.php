<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AsbestosPlan extends Model
{
    //
    protected $table = 'AsbestosPlan';

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
        return $this->belongsTo(User::class);
    }

    public function premise()
    {
        return $this->belongsTo(Premises::class);
    }

    public $timestamps = false;
}
