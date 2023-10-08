<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // Assuming you have a Project model

class ProjectController extends Controller
{
    // Display a list of projects
    public function index()
    {
        $projects = Project::all(); // Retrieve all projects from the database
        return view('projects.index', compact('projects'));
    }

    // Show the project creation form
    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
   
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'contact' => 'nullable|string',
            'min_skill_points' => 'nullable|integer|min:0',
        ]);
    
       
        $project = new Project;
        $project->name = $validatedData['name'];
        if (array_key_exists('description', $validatedData)) {
            $project->description = $validatedData['description'];
        }
        $project->contact = $validatedData['contact'];
        $project->min_skill_points = $validatedData['min_skill_points'] ?? 0;
    
        $project->save();
    
        return redirect('/projects')->with('success', 'Project created successfully');
    }

}
