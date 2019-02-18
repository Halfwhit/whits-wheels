<?php

namespace App\Http\Controllers;

use App\Mail\ProjectCreated;
use App\Project;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = Project::where('owner_id', auth()->id())->get();

        return view('homepage.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('homepage.projects.create');
    }

    public function store()
    {
        $attributes = request()->validate([

            'title' => ['required', 'min:3'],
            'description' => ['required']

        ]);

        $attributes['owner_id'] = auth()->id();

        $project = Project::create($attributes);

        \Mail::to('halfwhit@gmail.com')->send(

          new ProjectCreated($project)
        );

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        $this->authorize('update', $project);

        return view('homepage.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('homepage.projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}
