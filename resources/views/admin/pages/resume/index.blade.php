@extends('admin.base')
@section('content')
    <div class="card-body">
        <h5 class="card-title">My Resume </h5>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('resume.create') }}" type="button" class="btn btn-primary">
                Add Resume
            </a>
        </div>
        <div class="table-responsive">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kantor</th>
                        <th scope="col">Nama Waktu</th>
                        <th scope="col">Jenis Pekerjaan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->kantor }}</td>
                            <td>{{ $item->waktu }}</td>
                            <td>{{ $item->pekerjaan }}</td>
                            <td>
                                <a href="{{ route('resume.edit', $item->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ route('resume.show', $item->id) }}" class="btn btn-sm btn-warning">Detail</a>
                                <form action="{{ route('resume.destroy', $item->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        </tr>
                    @empty
                        <td colspan="7" class="text-center">Data Kosong</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
