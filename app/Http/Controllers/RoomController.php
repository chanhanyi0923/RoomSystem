<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Room;
use App\State;
use App\Bed;
use App\RoomLog;
use Gate;
use Auth;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index']]);
    }
    public function index()
    {
        return view('room.index', ['rooms' => Room::all()]);
    }
    public function create()
    {
        $this->authorize('admin');
        return view('room.create', [
            'states' => State::all(),
            'beds' => Bed::all()
        ]);
    }
    public function store(Request $request)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'number' => 'required|unique:rooms|integer',
            'state_id' => 'required|integer',
            'bed_id' => 'required|integer'
        ]);

        $room = new Room;
        $room->number = $request->input('number');
        $room->state_id = $request->input('state_id');
        $room->bed_id = $request->input('bed_id');
        $room->save();

        $room_log = new RoomLog;
        $room_log->user_id = Auth::user()->id;
        $room_log->room_id = $room->id;
        $room_log->state_id = $request->input('state_id');
        $room_log->bed_id = $request->input('bed_id');
        $room_log->save();

        return 'Finished';
    }
    /*
    public function show($id) {
    }
    */
    public function edit($id)
    {
        return view('room.edit', [
            'room' => Room::findOrFail($id),
            'states' => State::all(),
            'beds' => Bed::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, ['state_id' => 'required|integer']);
        $room = Room::findOrFail($id);
        $room->state_id = $request->input('state_id');
        $room->bed_id = $request->input('bed_id');
        $room->save();

        $room_log = new RoomLog;
        $room_log->user_id = Auth::user()->id;
        $room_log->room_id = $room->id;
        $room_log->state_id = $request->input('state_id');
        $room_log->bed_id = $request->input('bed_id');
        $room_log->save();

        return 'Finished';
    }
    public function destroy($id)
    {
        $this->authorize('admin');
        $room = Room::findOrFail($id);

        foreach ($room->room_logs as $room_log) {
            $room_log->delete();
        }

        $room->delete();
        return 'Finished';
    }
}
