<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    protected $table = 'users';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userID', 'email', 'type', 'foreName', 'surName', 'dob', 'password', 'certDate', 'certExpiry', 
        'orgID',
    ];

   /* protected $guarded = [
        'userID',  'certExpiry',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', //'remember_token',
    ];

    public function org()
    {
        return $this->belongsTo('App\Organisation');
    }

    public function premise()
    {
        return $this->belongsToMany('App\Premises');
    }

    public function plans()
    {
        return $this->hasMany('App\AsbestosPlan');
    }

    public $timestamps = false;
}
