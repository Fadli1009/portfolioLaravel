<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\FileResume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Resume::all();
        $pdf = FileResume::first();
        return view('admin.pages.resume.index', compact('data', 'pdf'));
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

    public function Createresume()
    {
        return view('admin.pages.resume.addResume');
    }
    public function Storeresume(Request $request)
    {
        // dd($request->all());
        $val = $request->validate([
            'resume' => 'required|mimetypes:application/pdf|max:10000'
        ], [
            'resume.mimetypes' => 'File harus berbentuk PDF',
            'resume.max' => 'File PDF terlalu besar'
        ]);
        if ($request->hasFIle('resume')) {
            $val['resume'] = $request->resume->store('resume', 'public');
        }
        toastr()->success('Resume berhasil diunggah');
        FileResume::create($val);
        return redirect()->route('resume.index');
    }
    public function Editresume($id)
    {
        $data = FileResume::find($id);
        return view('admin.pages.resume.editResume', compact('data'));
    }
    public function updateResume(Request $request, $id)
    {
        $data = FileResume::find($id);
        $val = $request->validate([
            'resume' => 'required|mimetypes:application/pdf|max:10000'
        ], [
            'resume.mimetypes' => 'File harus berbentuk PDF',
            'resume.max' => 'File PDF terlalu besar'
        ]);
        if ($request->hasFile('resume')) {
            Storage::delete('public/resume' . $data->resume);
            $val['resume'] = $request->resume->store('resume', 'public');
        }
        $data->update($val);
        toastr()->success('Resume berhasil diubah');
        return redirect()->route('resume.index');
    }

    public function deleteResume($id)
    {
        $data = FileResume::find($id);
        Storage::delete('public/resume' . $data->resume);
        $data->delete();
        toastr()->success('Resume berhasil dihapus');
        return redirect()->route('resume.index');
    }
}
