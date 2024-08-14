<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('starts_at', 'desc')->paginate(6);

        return view('projectFile.projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projectFile.projectCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and create a new project
        $validatedData = $request->validate([
            'employee_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'starts_at' => 'required|date|after:tomorrow',
            'ends_at' => 'required|date|after:starts_at',
            'status' => 'required|string|max:255',
        ]);

        $project = Project::create($validatedData);

        return redirect()->route('project.detail', $project)
                        ->with('success', 'Nouveau projet créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projectFile.projectDetail', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projectFile.projectEdit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'starts_at' => 'required|date|after:tomorrow',
            'ends_at' => 'required|date|after:starts_at',
            'status' => 'required|string|max:255',
        ]);

        $project->update($validatedData);

        return back()->with('success', 'Projet mis à jour.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')
                        ->with('success', 'Ce projet a été supprimé.');
    }
}
