<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EventParticipant;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response('ok', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        /* $event = Event::find($id);
        $usersId = EventParticipant::where('event_id', $id)->get('user_id');
        foreach ($usersId as $userId) {
            $users[] = User::find($userId->user_id);
        }
        //dd($users); */

        $event = Event::with(['participants.user'])->findOrFail($id);
        $users = $event->participants->pluck('user');

        return view('event', ['event' => $event, 'users' => $users]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
