<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all(); // Récupère toutes les chambres
        return view('bars.ManageRooms', compact('rooms')); // Passe les chambres à la vue
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'availability' => 'required|boolean',
        ]);

        Room::create($validated);

        return response()->json(['success' => true, 'message' => 'Room added successfully.']);
    }

    public function destroy(Room $room)
    {
        $room->delete();
        return response()->json(['success' => true, 'message' => 'Room deleted successfully.']);
    }
}