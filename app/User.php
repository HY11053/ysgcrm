<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected function articles()
    {
        return $this->hasMany('App\Admin\Article','user_id');
    }
    protected function bianji()
    {
        return $this->hasMany('App\Admin\Work','user_id');
    }
    protected function waitui()
    {
        return $this->hasMany('App\Admin\Worktui','user_id');
    }
}
