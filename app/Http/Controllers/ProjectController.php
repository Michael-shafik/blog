<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        ///valadition in form content  the image or no

        $request->validate([
            // 'title' => 'required|max:255',
            'Description' => 'required|max:2500',
            'photo' => 'required',
        ]);

        $project = new Project();
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path('/storage/galeryImages/');
            $file->move($destinationPath, $fileName);
            $project->photo = $fileName;
        }
        $project->Description = request('Description');
        $project->save();

        return redirect()->route('projects.index')
            ->with('success', 'Post created successfully.');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'Description' => 'required',
        ]);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path('/storage/galeryImages/');
            $file->move($destinationPath, $fileName);
            $project->photo = $fileName;
        }

        $project->update($request->all());

        return redirect()->route('projects.index')
            ->with('success', 'Post updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project
     *   $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $comments = DB::table('comments')->where('id', $project->id);
        if ($comments != null  && $comments->count() > 0) {
            $comments->delete();
        }
        $project->delete();
        return redirect()->route('projects.index')
            ->with('success', 'Post deleted successfully');
    }
}
