<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::orderBy('starts_at', 'desc')->paginate(5);

        return view('task.tasks', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.taskCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and create a new task
        $validatedData = $request->validate([
            'employee_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'starts_at' => 'required|date|after:tomorrow',
            'ends_at' => 'required|date|after:starts_at',
            'status' => 'required|string|max:255',
        ]);

        $task = Task::create($validatedData);

        return redirect()->route('task.detail', $task)
                        ->with('success', 'Nouvelle tâche créée');

    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('task.taskDetail', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('task.taskEdit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'starts_at' => 'required|date|after:tomorrow',
            'ends_at' => 'required|date|after:starts_at',
            'status' => 'required|string|max:255',
        ]);

        $task->update($validatedData);

        return back()->with('success', 'Tâche mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')
                        ->with('success', 'Cette tâche a été supprimée');


    }
}
