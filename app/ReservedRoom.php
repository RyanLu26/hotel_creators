<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservedRoom extends Model
{
    protected $fillable = [
    	'room_id','reservation_id','total'
    ];

    public function room($value='')
    {
    	return $this->belongsTo('App\Room');
    }

    public function reservation($value='')
    {
    	return $this->belongsTo('App\Reservation');
    }
}
