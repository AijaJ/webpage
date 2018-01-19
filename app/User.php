<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'city',
        'role_id', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
   
    
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    
      public function role(){
        return $this->belongsTo('App\Role');
    }
    
      public function persons(){
        return $this->hasMany('App\Person');
    }
     public function tasks(){
        return $this->belongsToMany('App\Task');
      }
       public function reviews(){
        return $this->belongsToMany('App\Review');
      }
}

