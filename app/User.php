<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'card_id',
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function ownPaginate($perPage = 20)
    {
        return $this->own()->paginate($this->perPage);
    }

    public function own()
    {
        return $this->hasMany('App\Item');
    }

    public function borrowing()
    {

    }

    public function borrowed()
    {

    }

    public function late()
    {

    }

    public function lost()
    {

    }

    public function getByStatus(Status $status)
    {

    }

}
