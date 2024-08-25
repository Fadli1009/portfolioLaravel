@extends('admin.base')
@section('content')
    <div class="card-body">
        <h5 class="card-title">Add About</h5>
        <form method="POST" action="{{ route('about.update', $about->id) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required value="{{ $about->judul }}">
            </div>
            <div class="mb-3">
                <label for="subJudul"class="form-label">Sub Judul</label>
                <input type="text" class="form-control" id="subJudul" name="subJudul" required
                    value="{{ $about->subJudul }}">
            </div>
            <div class="mb-3">
                <label for="isi"class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" id="name" name="isi" required>{{ $about->isi }}
                </textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </form>

    </div>
@endsection
