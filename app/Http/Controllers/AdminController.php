<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin-page.index');
    }

    public function home()
    {
        return view('admin-page.home');
    }

    public function viewProjects()
    {
        $projects = Admin::all();
        return view('admin-page.projects')->with('projects', $projects);
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time() . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/' . $path;
        Admin::create($requestData);
        return redirect('/admin/projects')->with('flash_message', 'Project Added!');
    }



    public function delete($id)
    {
        $project = Admin::destroy($id);
        return redirect('/admin/projects');
    }

    public function settings()
    {
        return view('admin-page.settings');
    }

    public function users()
    {
        return view('admin-page.users');
    }

    public function login()
    {
        return view('admin-page.login');
    }
}
