<?php

namespace App\Http\Controllers;

use App\Models\Skil;
use Illuminate\Http\Request;

class SkilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Skil::all();
        return view('admin.pages.skils.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.skils.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'nama_skil.*' => 'required'
        ]);
        foreach ($val['nama_skil'] as $value) {
            Skil::create([
                'nama_skil' => $value
            ]);
        }
        toastr()->success('berhasil menambahkan skils');
        return redirect()->route('skils.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skil $skil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skil $skil)
    {
        return view('admin.pages.skils.edit', compact('skil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skil $skil)
    {
        $val = $request->validate([
            'nama_skil' => 'required'
        ]);
        $skil->update($val);
        toastr()->success('berhasil merubah skils');
        return redirect()->route('skils.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skil $skil)
    {
        $skil->delete();
        toastr()->success('berhasil menghapus skil');
        return redirect()->route('skils.index');
    }
}
