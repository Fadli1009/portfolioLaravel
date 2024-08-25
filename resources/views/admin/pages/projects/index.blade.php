@extends('admin.base')
@section('content')
    <div class="card-body">
        <h5 class="card-title">My About </h5>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('projects.create') }}" type="button" class="btn btn-primary">
                Add Projects
            </a>
        </div>
        @if (session('success'))
        @endif
        <div class="table-responsive">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                <a href="{{ route('projects.edit', $item->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ route('projects.show', $item->id) }}" class="btn btn-sm btn-warning">Detail</a>
                                <form action="{{ route('projects.destroy', $item->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <td colspan="7" class="text-center">Data Kosong</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
