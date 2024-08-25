@extends('admin.base')
@section('content')
    <div class="card-body">
        <h5 class="card-title">My About </h5>
        @php
            $ifExist = App\Models\About::exists();
        @endphp
        @if (!$ifExist)
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('about.create') }}" type="button" class="btn btn-primary">
                    Add Profile
                </a>
            </div>
        @endif
        @if (session('success'))
        @endif
        <div class="table-responsive">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Sub Judul</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->subJudul }}</td>
                            <td>
                                <a href="{{ route('about.edit', $item->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ route('about.show', $item->id) }}" class="btn btn-sm btn-warning">Detail</a>
                                <form action="{{ route('about.destroy', $item->id) }}" method="POST"
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
