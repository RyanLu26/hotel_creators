<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    
    protected $fillable = [
    	'cin_date','cout_date','adult','child',
    	'roomtype_id','guest_id'
    ];

    public function roomtype($value='')
    {
    	return $this->belongsTo('App\RoomType');
    }

    public function guest($value=''){
    	return $this->belongsTo('App\Guest');
    }
}
