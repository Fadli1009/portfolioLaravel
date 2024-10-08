<header class="py-5">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-md-4 text-center text-md-start">
                <!-- Header text content-->
                <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                    <div class="text-uppercase">{{ $data->slug ?? 'Data Kosong' }}</div>
                </div>
                <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">{{ $data->slugv2 ?? 'Kosong'
                        }}</span>
                </h1>
            </div>
            <div class="col-md-8">
                <!-- Header profile picture-->
                <div class="profile bg-gradient-primary-to-secondary mx-auto">
                    <img class="profile-img"
                        src="{{ $data && $data->profile ? asset('storage/' . $data->profile) : 'Gambar kosong' }}"
                        alt="{{ $data->profile ??'Gambar kosong' }}" width="400px" />
                </div>
            </div>
        </div>
    </div>
</header>