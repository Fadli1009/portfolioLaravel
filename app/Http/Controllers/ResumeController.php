<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Resume::all();
        return view('admin.pages.resume.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.resume.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'waktu' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'kantor' => 'required'
        ]);
        Resume::create($val);
        return redirect()->route('resume.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Resume $resume)
    {
        return view('admin.pages.resume.detail', compact('resume'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resume $resume)
    {
        return view('admin.pages.resume.edit', compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {
        $val = $request->validate([
            'waktu' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'kantor' => 'required'
        ]);
        $resume->update($val);
        toastr()->success('Data berhasil diubah');
        return redirect()->route('resume.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        $resume->delete();
        toastr()->success('Data berhasil dihapus');
        return redirect()->route('resume.index');
    }
}
