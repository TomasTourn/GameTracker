<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller
{
    public function index(){
        $events = Event::latest()->get();
    }

    public function showAll(){
        $events = Event::all();
        return Inertia::render('Events/index',[
            'events' => $events,
        ]);
    }

    public function Store(Request $request){

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'start_time' => 'nullable|date_format:Y-m-d H:i:s',
            'image' => 'nullable|url',
        ]);
    }

    public function delete($id){
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->back()->with('success', 'Event deleted successfully.');
    }

    public function update(Request $request, $id){
        $event = Event::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'start_time' => 'nullable|date_format:Y-m-d H:i:s',
            'image' => 'nullable|url',
        ]);
        $event->update($validated);
        return redirect()->back()->with('success', 'Event updated successfully.');
    }
}
