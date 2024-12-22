<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;  

class RoomController extends Controller
{
    public function roomList(){
        $rooms = Room::latest()->get();
        $roomNumber = Room::generateRoomNumber();
        // dd($roomNumber);
        return view('admin.room.list',compact('rooms'));
    }
    
    public function roomStore(Request $request){
        $data = $request->validate([
            'room_number' => 'required',
            'type' => 'required',
            'price' => 'required',
            
        ]);

        $trainer = Room::create($data);
        return response()->json(['success'=>'Room added successfully...']);
    }   

    public function roomEdit($id)
    {
       
        $trainingType = Room::findOrFail($id);
        
        // dd($trainingType);
        return response()->json($trainingType);
    }

    public function roomUpdate(Request $request){
        // dd($request->id);
        $room = Room::findOrFail($request->id);
        // dd($trainer);
        $data = $request->validate([
            'room_number' => 'required',
            'type' => 'required',
            'price' => 'required',
        ]);

      
        $room->update($data);
        return response()->json(['success'=>'Room updated successfully...']);
    }

    public function roomDelete($id){
        $data = Room::findOrFail($id);
        $data->delete();
        return response()->json(['success' => 'Data deleted successfully.']);
    }

    public function findRoom(Request $request){
        $data = Room::findOrFail($request->id);
        return response()->json($data);
    }
}
