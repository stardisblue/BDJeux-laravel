<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];

    public function itemInfosPaginate($perPage = 20)
    {
        return $this->itemInfos()->paginate($perPage);
    }

    public function itemInfos()
    {
        return $this->hasMany('App\ItemInfo');

    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
