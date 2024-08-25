@extends('admin.base')
@section('content')
    <div class="card-body">
        <h5 class="card-title">Add Profile</h5>
        <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="name"class="form-label">Slug</label>
                <input type="text" class="form-control" id="name" name="slug" required>
            </div>
            <div class="mb-3">
                <label for="name"class="form-label">Slug v2</label>
                <input type="text" class="form-control" id="name" name="slugv2" required>
            </div>
            <div class="mb-3">
                <label for="name"class="form-label">Judul</label>
                <input type="text" class="form-control" id="name" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="name"class="form-label">Avatar</label>
                <input type="file" class="form-control" id="name" name="profile" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </form>

    </div>
@endsection
