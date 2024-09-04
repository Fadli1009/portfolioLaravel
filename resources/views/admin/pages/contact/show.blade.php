@extends('admin.base')

@section('content')
<div class="mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Pesan</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h5>Pengirim: {{ $contact->nama }}</h5>
                        <p><strong>Email:</strong> {{ $contact->email }}</p>
                        <p><strong>Tanggal:</strong> {{ $contact->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                    <hr>
                    <div>
                        <h6>Isi Pesan:</h6>
                        <p>{{ $contact->isi }}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('contact.index') }}" class="btn btn-secondary">Kembali ke Inbox</a>
                    <form action="{{ route('contact.destroy', $contact->id) }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection