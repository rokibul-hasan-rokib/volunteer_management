<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'event_date' => 'datetime', // Ensure 'start_date' is cast to Carbon instance
    ];


    final public function getAllEvents() {
        return self::query()->get();
    }

    final public function prepareData(Request $request, $existingImage = null) {
        $imagePath = $existingImage;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('photos');
            $file->move($destinationPath, $filename);
            $imagePath = 'photos/' . $filename;

            if ($existingImage && file_exists(public_path($existingImage))) {
                unlink(public_path($existingImage));
            }
        }

        return [
          "name" => $request->input('name'),
          "image" => $imagePath,
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

   public function getEventAssoc() {
       return self::query()->pluck('name', 'id');
   }

    public function project() {
        return $this->belongsTo(Project::class);
    }
}
