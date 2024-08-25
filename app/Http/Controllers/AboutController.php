<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = About::all();
        return view('admin.pages.about.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'judul' => 'required',
            'subJudul' => 'required',
            'isi' => 'required'
        ]);
        About::create($val);
        toastr()->success('berhasil menambakan tentang kamu');
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('admin.pages.about.detail', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.pages.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $val = $request->validate([
            'judul' => 'required',
            'subJudul' => 'required',
            'isi' => 'required'
        ]);
        $about->update($val);
        toastr()->success('berhasil mengubah tentang kamu');
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        toastr()->success('berhasil menghapus tentang kamu');
        return redirect()->route('about.index');
    }
}
