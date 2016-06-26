<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomLog extends Model {
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function room() {
        return $this->belongsTo('App\Room');
    }
    public function state() {
        return $this->belongsTo('App\State');
    }
}
