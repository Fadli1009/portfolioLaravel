@extends('portfolio.app')

@section('title', 'My Projects')

@section('content')
    <div class="container py-5">
        <header class="text-center mb-5">
            <h1 class="display-4 fw-bold">
                <span class="text-gradient">Projects</span>
            </h1>
        </header>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                @forelse ($project as $item)
                    <article class="card shadow-sm rounded-4 border-0 mb-5 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-md-6 p-4 d-flex flex-column justify-content-center">
                                    <h2 class="h3 fw-bold mb-3">{{ $item->judul }}</h2>
                                    <p class="text-muted mb-0">{{ $item->deskripsi }}</p>
                                </div>
                                <div class="col-md-6">
                                    <img class="img-fluid w-100 h-100 object-fit-cover"
                                        src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                                        loading="lazy">
                                </div>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="alert alert-info text-center" role="alert">
                        No projects found.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
