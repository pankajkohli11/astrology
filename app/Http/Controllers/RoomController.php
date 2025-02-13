<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;  

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        Room::create($request->validate([
            'room_number' => 'required|unique:rooms',
            'capacity' => 'required|integer',
            'price' => 'required|numeric',
            'is_available' => 'required|boolean',
        ]));
        return redirect()->route('rooms.index');
    }

    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $request->validate([
            'capacity' => 'required|integer',
            'price' => 'required|numeric',
            'is_available' => 'boolean'
        ]);

        $room->update($request->all());

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
    }

    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }
}
