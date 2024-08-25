@extends('admin.base')
@section('title', 'Edit Skils')
@section('content')
    <div class="card-body">
        <h5 class="card-title">Edit Languages</h5>
        <form method="POST" action="{{ route('languages.update', $languages->id) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Bahasa Pemrogaman</label>
                <input type="text" class="form-control" id="name" name="nama_pemrograman" required
                    value="{{ $languages->nama_pemrograman }}">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </form>

    </div>
@endsection
