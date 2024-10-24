<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() {
        return view('tasks.index');
    }

    public function create() {
        return view('tasks.create');
    }

    public function store() {
        $task = Task::create(
          [
            'description' => request('description')
            ]
        );
    }
}
