@extends('admin.base')
@section('content')
<div class="card-body">
    <h1>Add Resume</h1>
    @if ($errors->any)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li class="text-danger text-bold">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('store.resume') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="kantor" class="form-label">Resume <span class="text-danger">*PDF</span></label>
            <input type="file" class="form-control" id="kantor" name="resume" required>
        </div>
        <button class="btn btn-primary" type="submit">Add Resumes</button>
    </form>
</div>
@endsection