@extends('admin.base')
@section('content')
    <div class="card-body">
        <h5 class="card-title">My Skils </h5>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('languages.create') }}" type="button" class="btn btn-primary">
                Add Languages
            </a>
        </div>
        @if (session('success'))
        @endif
        <div class="table-responsive">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Bahasa Pemrograman</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nama_pemrograman }}</td>
                            <td>
                                <a href="{{ route('languages.edit', $item->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{ route('languages.destroy', $item->id) }}" method="POST"
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
