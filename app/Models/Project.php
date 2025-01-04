<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    final public function getAllProjects(){
        return self::query()->get();
    }

   final public function prepareData(Request $request)
   {
      return [
        "name" => $request->input('name'),
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



}
