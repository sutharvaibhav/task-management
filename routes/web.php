<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // Team routes
    Route::get('/team-members', [AdminController::class, 'team'])->name('team');
    Route::get('/get-teams', [AdminController::class, 'getTeams'])->name('getTeam');
    Route::get('/team-members/create', [AdminController::class, 'teamCreate'])->name('team.create');
    Route::post('/team-members/create/store', [AdminController::class, 'teamStore'])->name('team.store');
    Route::get('/team-members/edit/{team}', [AdminController::class, 'teamEdit'])->name('team.edit');
    Route::post('/team-members/update/{team}', [AdminController::class, 'teamUpdate'])->name('team.update');
    Route::get('/team-members/delete/{team}', [AdminController::class, 'teamDelete'])->name('team.delete');
    Route::get('/team-members/active/{team}', [AdminController::class, 'teamActive'])->name('team.active');

    // Project routes
    Route::get('/projects', [AdminController::class, 'project'])->name('project');
    Route::get('/get-projects', [AdminController::class, 'getProjects'])->name('getProject');
    Route::get('/projects/create', [AdminController::class, 'projectCreate'])->name('project.create');
    Route::post('/projects/create/store', [AdminController::class, 'projectStore'])->name('project.store');
    Route::get('/projects/edit/{project}', [AdminController::class, 'projectEdit'])->name('project.edit');
    Route::post('/projects/update/{project}', [AdminController::class, 'projectUpdate'])->name('project.update');
    Route::get('/projects/delete/{project}', [AdminController::class, 'projectDelete'])->name('project.delete');
    Route::get('/projects/active/{project}', [AdminController::class, 'projectActive'])->name('project.active');

    // Tasks
    Route::get('/tasks', [AdminController::class, 'task'])->name('task');
    Route::get('/get-tasks', [AdminController::class, 'getTask'])->name('getTask');
    Route::post('/tasks/update-order', [AdminController::class, 'updateTaskOrder'])->name('updateTaskOrder');
    Route::get('/tasks/create', [AdminController::class, 'taskCreate'])->name('task.create');
    Route::post('/tasks/create/store', [AdminController::class, 'taskStore'])->name('task.store');
    Route::get('/tasks/edit/{task}', [AdminController::class, 'taskEdit'])->name('task.edit');
    Route::post('/tasks/update/{task}', [AdminController::class, 'taskUpdate'])->name('task.update');
    Route::get('/tasks/delete/{task}', [AdminController::class, 'taskDelete'])->name('task.delete');
    Route::get('/tasks/active/{task}', [AdminController::class, 'taskActive'])->name('task.active');
});
