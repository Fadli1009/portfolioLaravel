<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Projects::all();
        return view('admin.pages.projects.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'judul' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg',
            'deskripsi' => 'required'
        ]);

        if ($request->hasFile('gambar')) {
            $val['gambar'] = $request->gambar->store('gambar', 'public');
        }
        Projects::create($val);
        toastr()->success('berhasil menambahkan data');
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $projects = Projects::find($id);
        return view('admin.pages.projects.detail', compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projects $projects)
    {
        //
    }
}
