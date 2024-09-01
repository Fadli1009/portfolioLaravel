@extends('admin.base')
@section('content')
    <div class="card-body">
        <h1>Edit Resume</h1>
        @if ($errors->any)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('update.resume', $data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="kantor" class="form-label">Resume <span class="text-danger">*PDF</span></label>
                <input type="file" class="form-control" id="kantor" name="resume" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary btn-sm" type="submit">Add Resume</button>
            </div>
        </form>
        <form action="{{ route('delete.resume', $data->id) }}" method="post" style="inline-block">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-sm" type="submit">Delete Resume</button>

        </form>
        <a href="{{ route('resume.index') }}" class="btn btn-secondary btn-sm mt-3">Back</a>
    </div>
@endsection
