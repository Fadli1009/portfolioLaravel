@extends('admin.base')
@section('content')


@section('content')
<div class="mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Inbox</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Pengirim</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $message)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $message->nama }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->nomorHp}}</td>
                                <td>
                                    <a href="{{ route('contact.show', $message->id) }}"
                                        class="btn btn-info btn-sm">Lihat</a>
                                    <form action="{{ route('contact.destroy', $message->id) }}" method="post"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus Pesan</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <td colspan="5" class="text-center">Inbox Kosong</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@endsection