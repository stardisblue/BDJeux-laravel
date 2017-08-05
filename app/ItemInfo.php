<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemInfo extends Model
{
    protected $fillable = [
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
