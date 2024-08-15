<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Custom route to use GET method to logout auth user instead of the native Laravel POST method
Route::get('logout', function() {
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
/** EMPLOYEE -- List and Create employee */
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('staff.create');
    /* Store and Show a new employee */
    Route::post('/employees', [EmployeeController::class, 'store'])->name('staff.store');
    Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('staff.detail');
/* Edit, Update and Destroy an employee */    
    Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('staff.edit');
    Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('staff.update'); // PUT allows updating data
    Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('staff.destroy');


/** PROJECT -- List and Create project */
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('project.create');
    /* Store and Show a new project */
    Route::post('/projects', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('project.detail');
/* Edit, Update and Destroy an project */  
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('project.update'); // PUT allows updating data
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');


/** TASK -- List and Create task */
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/tasks/create', [TaskController::class, 'create'])->name('task.create');
    /* Store and Show a new task */
    Route::post('/tasks', [TaskController::class, 'store'])->name('task.store');
    Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('task.detail');
/* Edit, Update and Destroy an project */  
    Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('task.edit');
    Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('task.update'); // PUT allows updating data
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('task.destroy');


});

require __DIR__.'/auth.php';
