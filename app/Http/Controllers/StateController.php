<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\State;

class StateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $this->authorize('admin');
        $states = State::all();
        return view('state.index', ['states' => $states]);
    }
    public function create()
    {
        $this->authorize('admin');
        return view('state.create');
    }
    public function store(Request $request)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'label' => 'required|max:50',
            'color' => 'required|integer'
        ]);

        $state = new State;
        $state->label = $request->input('label');
        $state->color = $request->input('color');
        $state->save();

        return view('layouts.finished');
    }
    /*
    public function show($id) {
        //
    }
    */
    public function edit($id)
    {
        $this->authorize('admin');

        $state = State::findOrFail($id);
        return view('state.edit', ['state' => $state]);
    }
    public function update(Request $request, $id)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'label' => 'required|max:50',
            'color' => 'required|integer'
        ]);

        $state = State::findOrFail($id);
        $state->label = $request->input('label');
        $state->color = $request->input('color');
        $state->save();
        return view('layouts.finished');
    }
    public function destroy($id)
    {
        $this->authorize('admin');
        $state = State::findOrFail($id);

        foreach ($state->rooms as $room) {
            $room->delete();
        }
        foreach ($state->room_logs as $room_log) {
            $room_log->delete();
        }

        $state->delete();
        return view('layouts.finished');
    }
}
