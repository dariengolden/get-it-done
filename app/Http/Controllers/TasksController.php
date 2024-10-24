<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() {
        // Retrieve tasks
        $tasks = Task::orderBy('completed_at')
        ->orderBy('id', 'DESC')
        ->get();

        // Pass data to index view
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function create() {
        return view('tasks.create');
    }

    public function store() {
        Task::create(
          [
            'description' => request('description')
            ]
        );

        // Redirect to  index page when task is created
        return redirect('/');
    }

    // Mark task as completed
    public function update($id) {
        $task = Task::where('id', $id)->first();
        $task->completed_at = now();
        $task->save();

        // Redirect to  index page when task is created
        return redirect('/');
    }
}
