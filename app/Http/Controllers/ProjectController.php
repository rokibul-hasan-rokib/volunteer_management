<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = (new Project())->getAllProjects();
        return view('admin.modules.project.index', compact('projects'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            DB::beginTransaction();
            $project = (new Project())->storeProject($request);
            DB::commit();
            return redirect()->route('project.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.modules.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.modules.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        try {
            DB::beginTransaction();
            (new Project())->updateProject($request, $project);
            DB::commit();
            return redirect()->route('project.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        try {
            DB::beginTransaction();
            (new Project())->deleteProject($project);
            DB::commit();
            return redirect()->route('project.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
