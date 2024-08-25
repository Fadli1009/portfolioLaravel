@extends('admin.base')
@section('content')
    <div class="card-body">
        <h5 class="card-title">Add Resumes</h5>
        <form method="POST" action="{{ route('resume.store') }}">
            @csrf
            <div class="mb-3">
                <label for="kantor" class="form-label">Kantor</label>
                <input type="text" class="form-control" id="kantor" name="kantor" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Waktu</label>
                <input type="text" class="form-control" id="name" name="waktu" required>
            </div>
            <div class="mb-3">
                <label for="pekerjaan" class="form-label">Jenis Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" id="deskripsi" name="deskripsi">                    
                </textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </form>
    </div>
@endsection
