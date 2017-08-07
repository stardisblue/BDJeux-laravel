<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public $timestamps = false;
    protected $table = 'items_users';

    protected $fillable = [
        'item_id',
        'user_id',
        'status_id',
        'date_begin',
        'date_end',
        'date_back',
    ];

    protected $dates = ['date_begin', 'date_end', 'date_back'];

    protected $appends = ['begin', 'end', 'back'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function item()
    {
        return $this->belongsTo('App\Item');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }


    public function getBeginAttribute()
    {
        return $this->date_begin->format('d/m/Y');
    }

    public function getEndAttribute()
    {
        return $this->date_end->format('d/m/Y');
    }

    public function getBackAttribute()
    {
        if (is_null($this->date_back)) {
            return null;
        }

        return $this->date_back->format('d/m/Y');
    }
}
