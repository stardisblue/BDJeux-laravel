<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'item_info_id',
        'item_state_id',
        'user_id',
        'price_cents',
        'borrowable',
    ];
    protected $appends = ['price'];

    public function itemInfo()
    {
        return $this->belongsTo('App\ItemInfo');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function itemState()
    {
        return $this->belongsTo('App\ItemState');
    }


    public function getPriceAttribute()
    {
        return $this->price_cents / 100;
    }
}
