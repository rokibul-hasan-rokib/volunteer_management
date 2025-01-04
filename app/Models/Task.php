<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

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

    public function event() {
        return $this->belongsTo(Event::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }


}
