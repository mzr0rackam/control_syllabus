<?php

namespace App;

use Zizaco\Entrust\EntrustRole;

class Permission extends EntrustRole
{
  protected $fillable = [
    'name',
    'display_name',
    'description'
  ];


	public function roles(){
    return $this->belongsToMany('App\Role');
  }

}
