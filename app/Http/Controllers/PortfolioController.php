<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\About;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
public function home()
{
    $about = About::first();

    $skills = Skill::all();

    $projects = Project::all();

    return view('portfolio.home', compact('about', 'skills', 'projects'));
}

    public function about(): View
    {
        $name = 'Abdullah';
        $description = 'I am a web developer learning PHP and Laravel.';

        return view('portfolio.about', compact('name', 'description'));
    }

    public function projects(): View
    {
        $projects = Project::all();

        return view('portfolio.projects', compact('projects'));
    }
    public function create()
    {
        return view('portfolio.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        Project::create($validatedData);

        return redirect()->route('projects')->with('success', 'Project created successfully.');
    }
    public function edit(Project $project)
    {
        return view('portfolio.edit', compact('project'));
    }
    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $project->update($validatedData);

        return redirect()->route('projects')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects')->with('success', 'Project deleted successfully.');
    }
}
