@extends('admin.base')
@section('title', 'Edit Skils')
@section('content')
    <div class="card-body">
        <h5 class="card-title">Edit Sosmed</h5>
        <form method="POST" action="{{ route('sosmed.update', $sosmed->id) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Link Sosial Media</label>
                <input type="text" class="form-control" id="name" name="link" required value="{{ $sosmed->link }}">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </form>

    </div>
@endsection
