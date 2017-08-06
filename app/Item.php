<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'item_info_id',
        'item_state_id',
        'user_id',
        'borrowable',
    ];


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
}
