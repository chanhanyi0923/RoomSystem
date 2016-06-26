<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\RoomLog;

class AdminController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        return view('admin.room_logs', ['room_logs' => RoomLog::all()]);
    }
}
