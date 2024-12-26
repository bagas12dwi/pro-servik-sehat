@if (session()->has('success'))
    <div class="alert alert-success d-flex align-items-center alert-dismissible fade show border-0" role="alert">
        <i class="fa-regular fa-circle-check me-2 fs-4"></i>
        <strong class="me-2">Berhasil!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show border-0" role="alert">
        <i class="fa-solid fa-triangle-exclamation me-2 fs-4"></i>
        <strong>Gagal! </strong> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
