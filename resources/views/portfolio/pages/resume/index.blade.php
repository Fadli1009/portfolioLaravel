@extends('portfolio.app')

@section('title', 'Resume')

@section('content')
    <div class="container py-5">
        <header class="text-center mb-5">
            <h1 class="display-4 fw-bold"><span class="text-gradient">Resume</span></h1>
        </header>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <section class="experience-section mb-5">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bold">Experience</h2>
                        <a class="btn btn-primary" href="{{ $pdf && $pdf->resume ? asset('storage/' . $pdf->resume) : '#' }}"
                            target="_blank">
                            <i class="bi bi-download me-2"></i>Download Resume
                        </a>
                    </div>

                    @forelse ($resume as $experience)
                        <div class="card shadow border-0 rounded-4 mb-4">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4 text-center text-lg-start">
                                            <div class="text-primary fw-bold mb-2">{{ $experience->waktu }}</div>
                                            <div class="fw-bold">{{ $experience->pekerjaan }}</div>
                                            <div class="text-muted small">{{ $experience->kantor }}</div>
                                            <div class="text-muted small">{{ $experience->alamat }}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="mb-0">{{ $experience->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-info text-center">No experience found.</div>
                    @endforelse
                </section>

                <section class="skills-section">
                    <div class="card shadow border-0 rounded-4">
                        <div class="card-body p-5">
                            <div class="mb-5">
                                <h3 class="fw-bold mb-4">
                                    <i class="bi bi-tools text-primary me-2"></i>
                                    <span class="text-gradient">Professional Skills</span>
                                </h3>
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    @forelse ($skil as $skill)
                                        <div class="col">
                                            <div
                                                class="bg-light rounded-4 p-3 h-100 d-flex align-items-center justify-content-center">
                                                {{ $skill->nama_skil }}
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col">
                                            <div class="bg-light rounded-4 p-3 text-center">No skills found.</div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>

                            <div>
                                <h3 class="fw-bold mb-4">
                                    <i class="bi bi-code-slash text-primary me-2"></i>
                                    <span class="text-gradient">Programming Languages</span>
                                </h3>
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    @forelse ($lang as $language)
                                        <div class="col">
                                            <div
                                                class="bg-light rounded-4 p-3 h-100 d-flex align-items-center justify-content-center">
                                                {{ $language->nama_pemrograman }}
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col">
                                            <div class="bg-light rounded-4 p-3 text-center">No languages found.</div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
