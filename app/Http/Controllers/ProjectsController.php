<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {

        $projects = Project::all();

        //return $projects;

        //return view('projects.index');

        //return view('projects.index', ['projects' => $projects]);

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function show(Project $project)
    {
        //$project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        //$project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(request(['title','description']));


        //$project = Project::findOrFail($id);

        // $project->title = request('title');
        // $project->description = request('description');

        // $project->save();

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3', 'max:255']
        ]);

        //U MODEL DODATI FILLABLE ILI GUARDED
        Project::create($attributes);

        // Project::create([
        //     'title' => request('title'),
        //     'description' => request('description')
        // ]);
        
        // $project = new Project();

        // $project->title = request('title');
        // $project->description = request('description');

        // $project->save();

        return redirect('/projects');
    }
}
