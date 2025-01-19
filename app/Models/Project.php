<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;

    const STATUS_LIST = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_INACTIVE => 'Inactive',
    ];

    protected $casts = [
        'start_date' => 'datetime', // Ensure 'start_date' is cast to Carbon instance
        'end_date' => 'datetime',   // If needed, also cast 'end_date' to datetime
    ];

    final public function getAllProjects(){
        return self::query()->get();
    }

    final public function prepareData(Request $request, $existingImage = null)
    {
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
            "start_date" => $request->input('start_date'),
            "end_date" => $request->input('end_date'),
            "status" => $request->input('status'),
        ];
    }


    final public function storeProject(Request $request)
    {
       return self::query()->create($this->prepareData($request));
    }

    final public function updateProject(Request $request, Project $project)
    {
        return $project->update($this->prepareData($request));
    }

    final public function deleteProject(Project $project)
    {
        return $project->delete();
    }

    final public function getProjectAssoc()
    {
        return self::query()->where('status', self::STATUS_ACTIVE)->pluck('name', 'id');
    }




}
