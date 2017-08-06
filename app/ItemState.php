<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemState extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];

    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
