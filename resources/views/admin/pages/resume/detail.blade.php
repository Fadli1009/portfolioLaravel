@extends('admin.base')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Resume Details</h5>

            <div class="mb-3">
                <label for="waktu" class="form-label"><strong>Tempat Bekerja</strong></label>
                <p id="waktu">{{ $resume->kantor }}</p>
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label"><strong>Waktu:</strong></label>
                <p id="waktu">{{ $resume->waktu }}</p>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label"><strong>Alamat:</strong></label>
                <p id="alamat">{{ $resume->alamat }}</p>
            </div>

            <div class="mb-3">
                <label for="kantor" class="form-label"><strong>Tugas:</strong></label>
                <p id="kantor">{{ $resume->pekerjaan }}</p>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label"><strong>Deskripsi:</strong></label>
                <p id="deskripsi">{{ $resume->deskripsi }}</p>
            </div>
            <a href="{{ route('resume.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection
