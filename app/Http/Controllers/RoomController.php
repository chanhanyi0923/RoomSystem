<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Room;
use App\State;
use Gate;
//use App\User;

class RoomController extends Controller {
    public function __construct() {
        $this->middleware('auth', [ 'except' => ['index'] ]);
    }
    public function index() {
        $rooms = Room::all();
        return view('room.index', ['rooms' => $rooms]);
    }
    public function create() {
        $this->authorize('admin');
        return view('room.create', ['states' => State::all()]);
    }
    public function store(Request $request) {
        $this->authorize('admin');
        $room = new Room;
        $room->number = $request->input('number');
        $room->state_id = $request->input('state_id');
        $room->save();
        return 'Finished';
    }
    public function show($id) {
        //
    }
    public function edit($id) {
        $room = Room::find($id);
        return view('room.edit', ['room' => $room, 'states' => State::all()]);
    }
    public function update(Request $request, $id) {
        $room = Room::find($id);
        $room->state_id = $request->input('state_id');
        $room->save();
        return 'Finished';
    }
    public function destroy($id) {
        $this->authorize('admin');
        $room = Room::find($id);
        $room->delete();
        return 'Finished';
    }
}
