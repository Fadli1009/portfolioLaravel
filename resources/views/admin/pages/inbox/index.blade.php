@extends('admin.base')

@section('content')
<div class="mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Detail Pesan</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label"><strong>Nama:</strong></label>
                <p>{{ $inbox->nama }}</p>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label"><strong>Email:</strong></label>
                <p>{{ $inbox->email }}</p>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label"><strong>Nomor HP:</strong></label>
                <p>{{ $inbox->nomorHp }}</p>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label"><strong>Isi Pesan:</strong></label>
                <p>{{ $inbox->isi }}</p>
            </div>
            <a href="{{ route('contact.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection