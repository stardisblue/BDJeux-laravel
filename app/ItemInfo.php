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
}
