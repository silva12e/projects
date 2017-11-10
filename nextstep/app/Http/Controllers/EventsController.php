<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventType;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $eventTypes = EventType::all();
        return response()->json([ 'events' => $events, 'eventTypes'=>$eventTypes]);
    }
    public function eventTypesIndex()
    {
        $eventType = EventType::all();
        return response()->json([ 'eventType' => $eventType]);
    }
    public function store(Request $request)
    {
        $event = new Event;
        $event->title = $request->title;
        $event->date = $request->date;
        $event->venue = $request->venue;
        $event->type = $request->type;
        $event->body = $request->body;
        $event->save();
    }

    public function getEvent($id)
    {
        $event = Event::find($id);
        return response()->json(['event'=>$event]);
    }

    public function createEventType(Request $request)
    {
        $eventType = new EventType;
        $eventType->type = $request->type;
        $eventType->save();
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->title = $request->title;
        $event->date = $request->date;
        $event->venue = $request->venue;
        $event->type = $request->type;
        $event->body = $request->body;
        $event->save();
    }
    public function destroy($id)
    {
        $event = Event::find($id);
        if($event)
            $event->delete();
        return response()->json('Event deleted from server');
    }
    public function destroyEventType($id)
    {
        $eventType = EventType::find($id);
        if($eventType)
            $eventType->delete();
        return response()->json('Event type deleted from server');
    }
}
