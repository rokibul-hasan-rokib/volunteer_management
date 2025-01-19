<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;

    const STATUS_LIST = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_INACTIVE => 'Inactive',
    ];


    public function getAllTasks() {
        return self::query()->get();
    }

    final public function prepareData(Request $request) {
        return [
          "title" => $request->input('title'),
          "description" => $request->input('description'),
          "status" => $request->input('status'),
          "event_id" => $request->input('event_id'),
          "user_id" => $request->input('user_id'),
        ];
    }

    final public function storeTask(Request $request) {
        return self::query()->create($this->prepareData($request));
    }
    final public function updateTask(Request $request, Task $task) {
        return $task->update($this->prepareData($request));
    }
    final public function deleteTask(Task $task) {
        return $task->delete();
    }

    public function getVolunteerTasks()
    {
        $user = Auth::user();
        return self::where('user_id', $user->id)->orderBy('id', 'desc')->get();
    }


    public function event() {
        return $this->belongsTo(Event::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }


}
