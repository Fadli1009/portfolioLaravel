@extends('admin.base')
@section('title', 'Edit Skils')
@section('content')
    <div class="card-body">
        <h5 class="card-title">Edit Resume</h5>
        <form method="POST" action="{{ route('resume.update', $resume->id) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="kantor" class="form-label">Tempat Bekerja</label>
                <input type="text" class="form-control" id="kantor" name="kantor" required
                    value="{{ $resume->kantor }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Waktu</label>
                <input type="text" class="form-control" id="name" name="waktu" required
                    value="{{ $resume->waktu }}">
            </div>
            <div class="mb-3">
                <label for="pekerjaan" class="form-label">Jenis Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required
                    value="{{ $resume->pekerjaan }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required
                    value="{{ $resume->alamat }}">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" id="deskripsi" name="deskripsi">{{ $resume->deskripsi }}
                </textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </form>

    </div>
@endsection
