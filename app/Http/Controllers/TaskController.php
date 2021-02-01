<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $tasks = Task::all();
        return view('admin.tasks.index', compact('tasks'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('admin.tasks.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $this->validateWith([
            'name' => 'required|max:255',
        ]);
        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'You have successfully created a new task.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $task = Task::find($id);
        return view('admin.tasks.show', compact('task'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $task = Task::find($id);
        return view('admin.tasks.edit', compact('task'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $this->validateWith([
            'name' => 'required|max:255',
        ]);

        $task = Task::find($id);
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'You have successfully updated a task.');
    }
}
