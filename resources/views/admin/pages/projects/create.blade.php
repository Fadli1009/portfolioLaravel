@extends('admin.base')
@section('content')
    <div class="card-body">
        <h5 class="card-title">Add Projects</h5>
        <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi"class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
            </div>
            <div class="mb-3">
                <label for="gambar"class="form-label">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </form>

    </div>
@endsection
