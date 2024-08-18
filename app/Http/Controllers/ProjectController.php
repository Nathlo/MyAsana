<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(4); // with 'created_at' -> the latest project added is ranked at the top

        return view('projectFile.projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $managers = User::where('role', 'manager')->get();

        // hard coded a copy of 'status enum' to use in the blade
        $status = [
            'Lancé' => 'Lancé',
            'Actif' => 'Actif',
            'Terminé' => 'Terminé'
        ];

        return view('projectFile.projectCreate', compact('managers', 'status'));
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
            'starts_at' => 'required|date|after:now',
            'ends_at' => 'required|date|after:starts_at',
            'status' => 'required|string|max:255',
        ]);

        $project = new Project($validatedData);

        $project->save();
        return  redirect()->route('projects.index')
                     ->with('success', 'Votre projet a été créé');

        
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
        $managers = User::where('role', 'manager')->get();

        // hard coded a copy of 'status enum' to use in the blade
        $status = [
            'Lancé' => 'Lancé',
            'Actif' => 'Actif',
            'Terminé' => 'Terminé'
        ];


        return view('projectFile.projectEdit', compact('managers', 'status', 'project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //dd($request);

        $validatedData = $request->validate([
            'employee_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'starts_at' => 'required|date',
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
