<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = (new Event())->getAllEvents();
        return view('admin.modules.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $event = (new Event())->storeEvent($request);
            DB::commit();
            return redirect()->route('event.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('admin.modules.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('admin.modules.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        try {
            DB::beginTransaction();
            (new Event())->updateEvent($request, $event);
            DB::commit();
            return redirect()->route('event.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        try {
            DB::beginTransaction();
            (new Event())->deleteEvent($event);
            DB::commit();
            return redirect()->route('event.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
            return redirect()->back();
       }
    }
}
