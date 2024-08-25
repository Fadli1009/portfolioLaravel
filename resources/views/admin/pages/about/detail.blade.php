@extends('admin.base')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Resume Details</h5>

            <div class="mb-3">
                <label for="waktu" class="form-label"><strong>Judul</strong></label>
                <p id="waktu">{{ $about->judul }}</p>
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label"><strong>Sub Judul:</strong></label>
                <p id="waktu">{{ $about->subJudul }}</p>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label"><strong>Deskripsi:</strong></label>
                <p id="alamat">{{ $about->isi }}</p>
            </div>
            <a href="{{ route('about.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection
