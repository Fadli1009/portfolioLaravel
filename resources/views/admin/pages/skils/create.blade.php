@extends('admin.base')
@section('content')
    <div class="card-body">
        <h5 class="card-title">Edit Skils</h5>
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary btn-sm" id="tambah">Add More Skils</button>
        </div>
        <form method="POST" action="{{ route('skils.store') }}">
            @csrf
            <div id="skils-container">
                <div class="mb-3">
                    <label for="name" class="form-label">Skils Name</label>
                    <input type="text" class="form-control" id="name" name="nama_skil[]" required>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        $('#tambah').click(function() {
            $('#skils-container').append(`
                 <div class="mb-3">
                    <label for="name" class="form-label">Skils Name</label>
                    <input type="text" class="form-control" id="name" name="nama_skil[]" required>
                </div>
            `)
        })
    </script>
@endsection
