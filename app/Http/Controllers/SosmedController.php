<?php

namespace App\Http\Controllers;

use App\Models\Sosmed;
use Illuminate\Http\Request;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Sosmed::all();
        return view('admin.pages.sosmed.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.sosmed.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'link.*' => 'required'
        ]);
        foreach ($val['link'] as $value) {
            Sosmed::create([
                'link' => $value
            ]);
        }
        toastr()->success('berhasil menambahkan Sosial Media');
        return redirect()->route('sosmed.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sosmed $sosmed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sosmed $sosmed)
    {
        return view('admin.pages.sosmed.edit', compact('sosmed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sosmed $sosmed)
    {
        $val = $request->validate([
            'link' => 'required'
        ]);
        $sosmed->update($val);
        toastr()->success('berhasil mengubah Sosial Media');
        return redirect()->route('sosmed.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sosmed $sosmed)
    {
        $sosmed->delete();
        toastr()->success('berhasil menghapus Sosial Media');
        return redirect()->route('sosmed.index');
    }
}
