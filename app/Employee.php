<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class employee extends Authenticatable 
{
use Notifiable;
protected $table = 'employees';
/**

* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'email', 'password',
];
/**
* The attributes that should be hidden for arrays.
*
* @var array
*/
protected $hidden = [
'password', 'remember_token',
];
public function getAuthPassword()
{
return $this->password;
}
    public function repair()
{
	    return	$this->hasMany('App\Repair'); 

}
}
