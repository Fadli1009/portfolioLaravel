<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content -->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <div class="text-uppercase">{{ $data->slug }}</div>
                    </div>
                    <h1 class="display-5 fw-bolder mb-4">
                        <span class="text-gradient d-inline">{{ $data->slugv2 }}</span>
                    </h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-4">
                        <a class="btn btn-primary btn-lg px-4 py-2 me-sm-3 fs-6 fw-bolder" href="resume.html">Resume</a>
                        <a class="btn btn-outline-dark btn-lg px-4 py-2 fs-6 fw-bolder"
                            href="projects.html">Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <!-- Header profile picture -->
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile bg-gradient-primary-to-secondary p-3">
                        <!-- Gambar dengan ukuran dan proporsi lebih baik -->
                        <img class="profile-img img-fluid rounded" src="{{ asset('storage/' . $data->profile) }}"
                            alt="Profile Image" style="max-width: 400px;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
