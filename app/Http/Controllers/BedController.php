<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bed;

class BedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $this->authorize('admin');
        return view('bed.index', ['beds' => Bed::all()]);
    }
    public function create()
    {
        $this->authorize('admin');
        return view('bed.create');
    }
    public function store(Request $request)
    {
        $this->authorize('admin');

        $this->validate($request, ['label' => 'required|max:50']);

        $bed = new Bed;
        $bed->label = $request->input('label');
        $bed->save();

        return view('layouts.finished');
    }
    /*
    public function show($id)
    {
        //
    }
    */
    public function edit($id)
    {
        $this->authorize('admin');

        return view('bed.edit', ['bed' => Bed::findOrFail($id)]);
    }
    public function update(Request $request, $id)
    {
        $this->authorize('admin');

        $this->validate($request, ['label' => 'required|max:50']);

        $bed = Bed::findOrFail($id);
        $bed->label = $request->input('label');
        $bed->save();

        return view('layouts.finished');
    }
    public function destroy($id)
    {
        $this->authorize('admin');
        $bed = Bed::findOrFail($id);

        foreach ($bed->rooms as $room) {
            $room->delete();
        }
        foreach ($bed->room_logs as $room_log) {
            $room_log->delete();
        }

        $bed->delete();

        return view('layouts.finished');
    }
}
