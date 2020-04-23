<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Organisation extends Model
{
    //
    protected $table = 'Organisation';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'orgName', 'type', 'lAuth', 'licenceNum', 'licenceDate', 'licenceExp',
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
