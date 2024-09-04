@extends('portfolio.app')

@section('title', $data->judul ?? '')

@section('content')
@include('portfolio.pages.header.header')


<section class="about-section bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article class="about-content text-center">
                    <h1 class="about-title display-4 fw-bold mb-4">
                        <span class="text-gradient">{{ $about->judul ?? 'tidak ada about' }}</span>
                    </h1>
                    <p class="about-subtitle lead mb-4">{{ $about->subJudul ?? '' }}</p>
                    <div class="about-description mb-5">
                        <p class="text-muted">{{ $about->isi ?? '' }}</p>
                    </div>
                    <div class="about-social-links">
                        <ul class="list-inline fs-3">
                            @forelse ($link as $item)
                            @php
                            $icon = '';
                            if (strpos($item->link, 'youtube.com') !== false) {
                            $icon = 'bi bi-youtube';
                            } elseif (strpos($item->link, 'instagram.com') !== false) {
                            $icon = 'bi bi-instagram';
                            } elseif (strpos($item->link, 'twitter.com') !== false) {
                            $icon = 'bi bi-twitter';
                            } elseif (strpos($item->link, 'github.com') !== false) {
                            $icon = 'bi bi-github';
                            } elseif (strpos($item->link, 'facebook.com') !== false) {
                            $icon = 'bi bi-facebook';
                            } else {
                            $icon = 'bi bi-link';
                            }
                            @endphp
                            <li class="list-inline-item">
                                <a href="{{ $item->link }}" class="social-link text-gradient" aria-label="Twitter">
                                    <i class="{{ $icon }}"></i>
                                </a>
                            </li>
                            @empty
                            <p>Tidak ada Social Media</p>
                            @endforelse
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection