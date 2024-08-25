@extends('portfolio.app')

@section('title', $data->judul)

@section('content')
    @include('portfolio.pages.header.header')

    <section class="about-section bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <article class="about-content text-center">
                        <h1 class="about-title display-4 fw-bold mb-4">
                            <span class="text-gradient">{{ $about->judul }}</span>
                        </h1>
                        <p class="about-subtitle lead mb-4">{{ $about->subJudul }}</p>
                        <div class="about-description mb-5">
                            <p class="text-muted">{{ $about->isi }}</p>
                        </div>
                        <div class="about-social-links">
                            <ul class="list-inline fs-3">
                                <li class="list-inline-item">
                                    <a href="#" class="social-link text-gradient" aria-label="Twitter">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="social-link text-gradient" aria-label="LinkedIn">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="social-link text-gradient" aria-label="GitHub">
                                        <i class="bi bi-github"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
