<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::orderBy('id', 'desc')->paginate(8);

        return view( 'employee.employees', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.staffCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and create a new employee
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'position' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'photo' => 'nullable|image|max:2048', // 2G
        ]);

        $employee = Employee::create($validatedData);

        return redirect()->route('staff.detail', $employee)
                         ->with('success', 'Nouvel employé créé.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employee.staffDetail', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employee.staffEdit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'position' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'photo' => 'nullable|image|max:2048', // 2G
        ]);

        $employee->update($validatedData);

        return back()->with('success', 'Employé mis à jour.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
                         ->with('success', 'Cet employé a été supprimé.');
    }
}
