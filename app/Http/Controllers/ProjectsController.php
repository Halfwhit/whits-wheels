<?php

namespace App\Http\Controllers;

use App\Notifications\ProjectCreated;
use App\Project;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('homepage.projects.index', [
            'projects' => auth()->user()->projects
        ]);
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

        auth()->user()->notify(new ProjectCreated($project));



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

        $attributes = request()->validate([

            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']

        ]);

        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}
