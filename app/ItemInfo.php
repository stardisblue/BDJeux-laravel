<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string title
 */
class ItemInfo extends Model
{
    protected $fillable = [
        'item_type_id',
        'title',
        'description',
        'isbn',
        'price',
        'author',
        'nsfw',
    ];

    public function itemType()
    {
        return $this->belongsTo('App\itemType');
    }

    public function itemsPaginate($perPage = 20)
    {
        return $this->items()->paginate($perPage);
    }

    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
