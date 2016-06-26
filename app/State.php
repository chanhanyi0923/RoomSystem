<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model {
    public $timestamps = false;
    public function rooms() {
        return $this->hasMany('App\Room');
    }
    public function room_logs() {
        return $this->hasMany('App\RoomLog');
    }
}
