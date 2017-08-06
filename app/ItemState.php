<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemState extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];

    public function itemsPaginate($perPage = 20)
    {
        return $this->items()->paginate($perPage);
    }

    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
