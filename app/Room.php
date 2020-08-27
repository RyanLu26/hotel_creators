<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
     protected $fillable = [
    	'rnumber','name','photo','description',
    	'rate','roomtype_id'
    ];

     public function roomtype($value='')
    {
    	return $this->belongsTo('App\RoomType');
    }
}
