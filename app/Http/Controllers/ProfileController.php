<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Profile::all();
        return view('admin.pages.profile.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'profile' => 'required|mimes:png,jpg,jfif,jpg,jpeg',
            'slug' => 'required',
            'slugv2' => 'required',
            'judul' => 'required'
        ]);
        if ($request->hasFile('profile')) {
            $data['profile'] = $request->profile->store('profiles', 'public');
        }
        Profile::create($data);
        toastr()->success('berhasil Menambahkan data');
        return redirect()->route('profile.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        return view('admin.pages.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $data = $request->validate([
            'nama' => 'required',
            'profile' => 'nullable|mimes:png,jpg,jfif,jpg,jpeg',
            'slug' => 'required',
            'slugv2' => 'required',
            'judul' => 'required'
        ]);
        if ($request->hasFile('profile')) {
            if ($request->profile) {
                Storage::delete('public/' . $profile->profile);
            }
            $data['profile'] = $request->profile->store('profiles', 'public');
        }

        $profile->update($data);
        return redirect()->route('profile.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();
        toastr()->success('berhasil menghapus data');
        return redirect()->route('profile.index');
    }
}
