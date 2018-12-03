<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Project;
class ProjectController extends Controller
{
    public function store(Request $request) 
    {
        $data = $request->except(['_token']);
        $data['created_at'] = date('Y-m-d h:i:s');

        Project::insert($data);
        $request->session()->flash('alert.message', 'Project entitled ' . $data['name'] . ' was created successfully!');
        return redirect('/admin/projects');
    }

    public function index() 
    {
        $projects = Project::get();
        return view('pages.admin.projects', compact(['projects']));
    }

    public function destroy($id) 
    {
        Project::findOrFail($id)->delete();
        $request->session()->flash('alert.message', 'Project was deleted successfully!');
        return redirect('/admin/projects');
    }

    public function edit($id) 
    {
        $project = Project::findOrFail($id);
        return view('pages.admin.edit-project', compact(['project']));
    }

    public function update(Request $request, $id) 
    {
        Project::findOrFail($id)->update($request->except(['_token']));
        $request->session()->flash('alert.message', 'Project entitled ' . $request->name . ' was created successfully!');
        return redirect()->back();
    }

    public function create() 
    {
        return view('pages.admin.create-project');
    }
}
