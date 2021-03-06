<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function state()
    {
        return $this->belongsTo('App\State');
    }
    public function bed()
    {
        return $this->belongsTo('App\Bed');
    }
    public function room_logs()
    {
        return $this->hasMany('App\RoomLog');
    }
}
