@extends('admin.base')
@section('title', 'Edit Skils')
@section('content')
    <div class="card-body">
        <h5 class="card-title">Edit Skils</h5>
        <form method="POST" action="{{ route('skils.update', $skil->id) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Skils</label>
                <input type="text" class="form-control" id="name" name="nama_skil" required
                    value="{{ $skil->nama_skil }}">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </form>

    </div>
@endsection
