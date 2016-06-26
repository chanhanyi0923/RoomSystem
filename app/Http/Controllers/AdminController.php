<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\RoomLog;
use App\User;

class AdminController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    public function index($search = null, $id = null) {
        $this->authorize('admin');
        if(isset($search) && isset($id)) {
            switch($search) {
                case 'user':{
                    echo 'user';
                }
                break;
                case 'room':{
                    echo 'room';
                }
                break;
                case 'state':{
                    echo 'state';
                }
                break;
            }
        }
        return view('admin.room_logs', [
            'room_logs' => RoomLog::all(),
            'users' => User::all()
        ]);
    }
}
