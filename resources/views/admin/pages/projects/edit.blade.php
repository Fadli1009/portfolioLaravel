@extends('admin.base')
@section('content')
<div class="card-body">
    <h5 class="card-title">Ediit Projects</h5>
    <form method="POST" action="{{ route('projects.update', $projects->id) }}" enctype="multipart/form-data">
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required value="{{ $projects->judul }}">
        </div>
        <div class="mb-3">
            <label for="subJudul" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="subJudul" name="deskripsi" required
                value="{{ $projects->deskripsi }}">
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <div class="d-flex align-items-center">
                <!-- Gambar Avatar -->
                <img src="{{ asset('storage/' . $projects->gambar) }}" alt="{{ $projects->judul }}"
                    style="width: 150px; height: 150px; object-fit: cover;">

                <!-- Input File -->
                <input type="file" class="form-control ms-2" id="gambar" name="gambar">
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>

</div>
@endsection