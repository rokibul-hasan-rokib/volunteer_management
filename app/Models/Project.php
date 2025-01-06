<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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

/*************  ✨ Codeium Command ⭐  *************/
    /**
     * Retrieve all projects from the database.
     *
/******  bc1e92e5-03b4-41b4-802b-cae0e71c5a45  *******/
     */

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

    final public function getProjectAssoc()
    {
      return self::query()->where('status', self::STATUS_ACTIVE)->pluck('name', 'id')->get();
    }



}
