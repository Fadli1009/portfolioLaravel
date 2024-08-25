@extends('admin.base')
@section('content')
    <div class="card-body">
        <h5 class="card-title">My Profile </h5>
        @php
            $ifExist = App\Models\Profile::exists();
        @endphp
        @if (!$ifExist)
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('profile.create') }}" type="button" class="btn btn-primary">
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
                        <th scope="col">Nama</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Slug v2</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->slugv2 }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $item->profile) }}" alt="Profile Image"
                                    class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                            </td>

                            <td>
                                <a href="{{ route('profile.edit', $item->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{ route('profile.destroy', $item->id) }}" method="POST"
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
