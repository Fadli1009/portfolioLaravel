@extends('admin.base')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Projects Details</h5>

            <div class="mb-3">
                <label for="judul" class="form-label"><strong>Judul:</strong></label>
                <p id="judul">{{ $projects->judul }}</p>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label"><strong>Deskripsi:</strong></label>
                <p id="deskripsi">{{ $projects->deskripsi }}</p>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label"><strong>Gambar:</strong></label><br>
                <img src="{{ asset('storage/' . $projects->gambar) }}" alt="Gambar {{ $projects->judul }}" width="300px">
            </div>

            <a href="{{ route('projects.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection
