<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = (new Task())->getAllTasks();
        return view('admin.modules.task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $event = (new Event())->getEventAssoc();
        $user = (new User())->getUserAssoc();
        return view('admin.modules.task.create', compact('event', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $task = (new Task())->storeTask($request);
            DB::commit();
            return redirect()->route('task.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('admin.modules.task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $event = (new Event())->getEventAssoc();
        $user = (new User())->getUserAssoc();
        return view('admin.modules.task.edit', compact('task', 'event', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        try {
            DB::beginTransaction();
            (new Task())->updateTask($request, $task);
            DB::commit();
            return redirect()->route('task.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        try {
            DB::beginTransaction();
            (new Task())->deleteTask($task);
            DB::commit();
            return redirect()->route('task.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
