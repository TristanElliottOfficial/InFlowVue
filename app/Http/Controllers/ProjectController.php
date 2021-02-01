<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('admin.projects.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        // Validate the users input.
        $this->validateWith([
            'name' => 'required|max:255'
        ]);

        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();

        return redirect()->route('projects.index')->with('success', 'You have successfully created a new project.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $project = Project::find($id);
        return view('admin.projects.show', compact('project'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.projects.edit', compact('project'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        // Validate the users input.
        $this->validateWith([
            'name' => 'required|max:255'
        ]);

        $project = Project::find($id);
        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();

        return redirect()->route('projects.index')->with('success', 'You have successfully updated a project.');
    }
}
