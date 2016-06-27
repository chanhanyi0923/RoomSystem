<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\RoomLog;
use App\User;
use App\Room;
use App\State;

class AdminController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    public function index($search = null, $id = null) {
        $this->authorize('admin');
        if(isset($search) && isset($id)) {
            switch($search) {
                case 'user':case 'room':case 'state':
                $room_logs = RoomLog::where($search.'_id', $id)->get();
            }
        }
        if(empty($room_logs)) {
            $room_logs = RoomLog::all();
        }
        return view('admin.room_logs', [
            'room_logs' => $room_logs,
            'users' => User::all(),
            'rooms' => Room::all(),
            'states' => State::all()
        ]);
    }
}
