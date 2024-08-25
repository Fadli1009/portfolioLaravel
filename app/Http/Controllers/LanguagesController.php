<?php

namespace App\Http\Controllers;

use App\Models\Languages;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Languages::all();
        return view('admin.pages.languages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'nama_pemrograman.*' => 'required'
        ]);
        foreach ($val['nama_pemrograman'] as $key => $value) {
            Languages::create([
                'nama_pemrograman' => $value
            ]);
        }
        toastr()->success('Berhasil menambahkan bahasa pemrograman');
        return redirect()->route('languages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Languages $languages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $languages = languages::find($id);
        return view('admin.pages.languages.edit', compact('languages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $languages = languages::find($id);

        $val = $request->validate([
            'nama_pemrograman' => 'required'
        ]);
        $languages->update($val);
        toastr()->success('Berhasil mengubah bahasa pemrograman');
        return redirect()->route('languages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $languages = languages::find($id);
        $languages->delete();
        toastr()->success('Berhasil menghapus bahasa pemrograman');
        return redirect()->route('languages.index');
    }
}
