<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    final public function preparaData(Request $request) {
        return [
          "name" => $request->input('name'),
          "description" => $request->input('description'),
          "event_date" => $request->input('event_date'),
          "project_id" => $request->input('project_id'),
        ];
    }

   final public function storeEvent(Request $request) {
       return self::query()->create($this->prepareData($request));
   }

   final public function updateEvent(Request $request, Event $event) {
       return $event->update($this->prepareData($request));
   }

   final public function deleteEvent(Event $event) {
       return $event->delete();
   }

    public function project() {
        return $this->belongsTo(Project::class);
    }
}
