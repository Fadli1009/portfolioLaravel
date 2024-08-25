@extends('admin.base')
@section('content')
    <div class="card-body">
        <h5 class="card-title">Add Profile</h5>
        <form method="POST" action="{{ route('profile.update', $profile->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="nama" required
                    value="{{ $profile->nama }}">
            </div>
            <div class="mb-3">
                <label for="name"class="form-label">Slug</label>
                <input type="text" class="form-control" id="name" name="slug" required
                    value="{{ $profile->slug }}">
            </div>
            <div class="mb-3">
                <label for="name"class="form-label">Slug v2</label>
                <input type="text" class="form-control" id="name" name="slugv2" required
                    value="{{ $profile->slugv2 }}">
            </div>
            <div class="mb-3">
                <label for="name"class="form-label">Judul</label>
                <input type="text" class="form-control" id="name" name="judul" required
                    value="{{ $profile->judul }}">
            </div>
            <div class="mb-3">
                <label for="profile" class="form-label">Avatar</label>
                <div class="d-flex align-items-center">
                    <!-- Gambar Avatar -->
                    <img src="{{ asset('storage/' . $profile->profile) }}" alt="{{ $profile->nama }}"
                        class="rounded-circle me-3" style="width: 150px; height: 150px; object-fit: cover;">

                    <!-- Input File -->
                    <input type="file" class="form-control" id="profile" name="profile">
                </div>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </form>

    </div>
@endsection
