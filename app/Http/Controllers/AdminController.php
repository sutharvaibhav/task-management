<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Project;
use App\Models\Task;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalProjects = Project::count();
        $totalMembers = Team::count();
        $completedTasks = Task::where('status', 'completed')->count();
        $pendingTasks = Task::where('status', 'pending')->count();
        return view('dashboard', compact('totalProjects', 'totalMembers', 'completedTasks', 'pendingTasks'));
    }

    // Team

    public function team()
    {
        $teams = Team::all();
        return view('team.index', compact('teams'));
    }

    public function getTeams()
    {
        $teams = Team::query();

        return DataTables::of($teams)
            ->addColumn('action', function ($row) {
                $action = '';
                $action .= '<a href="' . route('admin.team.edit', ['team' => $row->id]) . '" class="btn btn-sm btn-primary me-3">Edit</a>';
                $action .= '<a href="' . route('admin.team.delete', ['team' => $row->id]) . '" class="btn btn-sm" style="background-color:red !important;  color: white !important " onclick="return confirm(\'Do you want to delete this team member?\')">Delete</a>';
                return $action;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function teamCreate()
    {
        return view('team.create');
    }
    public function teamStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|min:10|max:255',
        ]);
        $team = new Team();
        $team->name = $request->name;
        $team->email = $request->email;
        $team->mobile = $request->mobile;
        $team->save();
        return redirect()->route('admin.team')->with('success', 'Team member added successfully!');
    }
    public function teamEdit(Team $team)
    {
        return view('team.edit', compact('team'));
    }
    public function teamUpdate(Request $request, Team $team)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|min:10|max:255',
        ]);
        $team->name = $request->name;
        $team->email = $request->email;
        $team->mobile = $request->mobile;
        $team->save();
        return redirect()->route('admin.team')->with('success', 'Team member updated successfully!');
    }
    public function teamDelete(Team $team)
    {
        $team->delete();
        return redirect()->route('admin.team')->with('success', 'Team member deleted successfully!');
    }


    //Project

    public function project()
    {
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }
    public function getProjects()
    {
        $projects = Project::query();

        return DataTables::of($projects)
            ->addColumn('action', function ($row) {
                $action = '';
                $action .= '<a href="' . route('admin.project.edit', ['project' => $row->id]) . '" class="btn btn-sm btn-primary me-3">Edit</a>';
                $action .= '<a href="' . route('admin.project.delete', ['project' => $row->id]) . '" class="btn btn-sm" style="background-color:red !important; color: white !important " onclick="return confirm(\'Do you want to delete this project?\')">Delete</a>';
                return $action;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function projectCreate()
    {
        return view('project.create');
    }
    public function projectStore(Request $request)
    {
        $validated = $request->validate([
            'project_name' => 'required|max:255',
        ]);
        $project = new Project();
        $project->project_name = $request->project_name;
        $project->save();
        return redirect()->route('admin.project')->with('success', 'Project added successfully!');
    }
    public function projectEdit(Project $project)
    {
        return view('project.edit', compact('project'));
    }
    public function projectUpdate(Request $request, Project $project)
    {
        $validated = $request->validate([
            'project_name' => 'required|max:255',
        ]);
        $project->update($validated);
        return redirect()->route('admin.project')->with('success', 'Project updated successfully!');
    }
    public function projectDelete(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.project')->with('success', 'Project deleted successfully!');
    }

    // Tasks

    public function task()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function updateTaskOrder(Request $request)
    {
        $items = $request->input('items');

        foreach ($items as $index => $id) {
            Task::where('id', $id)->update(['order' => $index + 1]);
        }

        return response()->json(['status' => 'success']);
    }

    public function getTask()
    {
        // $tasks = Task::query();
        $tasks = Task::with(['project', 'member'])->select('tasks.*')->orderBy('order', 'ASC');

        return DataTables::of($tasks)
            ->addColumn('action', function ($row) {
                $action = '';
                $action .= '<a href="' . route('admin.task.edit', ['task' => $row->id]) . '" class="btn btn-sm btn-primary me-3">Edit</a>';
                $action .= '<a href="' . route('admin.task.delete', ['task' => $row->id]) . '" class="btn btn-sm" style="background-color:red !important;  color: white !important " onclick="return confirm(\'Do you want to delete this task?\')">Delete</a>';
                return $action;
            })
            ->editColumn('priority', function ($row) {
                return ucfirst($row->priority);
            })
            ->editColumn('status', function ($row) {
                return ucfirst($row->status);
            })
            ->addColumn('project_name', function ($row) {
                return $row->project ? $row->project->project_name : 'N/A';
            })
            ->addColumn('member_name', function ($row) {
                return $row->member ? $row->member->name : 'N/A';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function taskCreate()
    {
        $projects = Project::get();
        $members = Team::get();
        return view('tasks.create', compact('projects', 'members'));
    }
    public function taskStore(Request $request)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,completed',
            'priority' => 'required|in:low,medium,high',
            'project_id' => 'required|integer',
            'member_id' => 'required|integer',
            'task_heading' => 'required|max:255',
            'task_description' => 'required',
        ]);
        $validated['assigned_date'] = now();
        Task::create($validated);
        return redirect()->route('admin.task')->with('success', 'Task added successfully!');
    }
    public function taskEdit(Task $task)
    {
        $projects = Project::all();
        $members = Team::all();
        return view('tasks.edit', compact('task', 'projects', 'members'));
    }
    public function taskUpdate(Request $request, Task $task)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,completed',
            'priority' => 'required|in:low,medium,high',
            'project_id' => 'required|integer',
            'member_id' => 'required|integer',
            'task_heading' => 'required|max:255',
            'task_description' => 'required',
        ]);
        if ((int)$request->member_id !== (int)$task->member_id) {
            $validated['assigned_date'] = now();
        }
        $task->update($validated);
        return redirect()->route('admin.task')->with('success', 'Task updated successfully!');
    }
    public function taskDelete(Task $task)
    {
        $task->delete();
        return redirect()->route('admin.task')->with('success', 'Task deleted successfully!');
    }
}
