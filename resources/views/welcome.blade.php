@extends('layout.layout')

@section('konten')
    <style>
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgb(187, 187, 187);
            /* Change to a color that contrasts with your white background */
            border-radius: 50%;
            /* Optional: make the icons circular */
        }
    </style>

    <section id="header">
        <div class="jumbotron">
            <div class="jumbotron-overlay"></div>
            <div class="jumbotron-content">
                <h3>Selamat datang di E-Liminate</h3>
                <div class="container">
                    <p>E-Liminate Optimalisasi Implementasi Deteksi Dini Kanker Leher Rahim dengan apps berbasis website
                        yang proaktif dan terintegrasi Puskesmas Rowosari Kota Semarang.</p>
                    <p>Update informasi seputar kanker leher rahim (serviks), booking jadwal periksa DNA HPV <span
                            class="fst-italic">co-testing</span> IVA,
                        lacak hasil sampel DNA HPV, chat bidan dan dokter, deteksi mandiri faktor resiko dan pengetahuan
                        kanker serviks dan kesehatan, semua bisa di E-Liminate!</p>
                </div>
                <a href="{{ route('quiz') }}" class="btn btn-primary">Mulai Quiz</a>
            </div>
        </div>
    </section>

    @auth
        <div class="container-fluid my-3">
            @include('components.alert.notification-index')
        </div>
    @endauth

    <section id="kontak">
        <div class="container-fluid my-3">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-evently align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <img src="{{ URL::asset('assets/img/kontak.jpg') }}" class="img-fluid rounded"
                                style="width: 50em; object-fit: cover" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h4 class="text-bold text-primary mb-3 card-title">Mengapa E-Liminate?</h4>
                            <p>
                                Kanker leher rahim merupakan salah satu ancaman kesehatan yang dapat dicegah dan ditangani
                                dengan deteksi dini yang tepat. Sayangnya, keterbatasan akses informasi dan pelayanan sering
                                kali menjadi hambatan bagi masyarakat. E-Liminate hadir untuk mengatasi tantangan ini
                                dengan:
                            </p>
                            <ul>
                                <li><strong>Proaktif</strong>: Memberikan notifikasi rutin dan edukasi kesehatan secara
                                    langsung kepada
                                    pengguna.</li>
                                <li><strong>Terintegrasi</strong>: Menghubungkan pasien, petugas kesehatan, dan sistem
                                    informasi Puskesmas
                                    Rowosari untuk memastikan pelayanan yang efisien.</li>
                                <li><strong>Mudah Diakses</strong>: Dapat diakses kapan saja dan di mana saja melalui
                                    perangkat yang
                                    terhubung dengan internet.</li>
                            </ul>
                            <a href="https://wa.me/6285713255366" target="_blank" class="btn btn-primary">Hubungi Kontak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="artikel">
        <div class="container-fluid my-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-bold text-primary mb-3 card-title"><i class="fa-regular fa-newspaper"></i> Artikel</h4>
                    <div class="row mb-3">
                        @foreach ($articles as $article)
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ URL::asset('storage/' . $article->thumbnails) }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title d-inline-block text-truncate" style="width: 15rem">
                                            {{ $article->title }}</h5>
                                        <p class="card-text fst-italic" style="font-size: 10pt">Oleh {{ $article->name }}
                                        </p>
                                        <p class="card-text fst-italic" style="font-size: 8pt">
                                            {{ $article->created_at->diffForHumans() }}</p>
                                        <a href="{{ route('artikel.show', $article->slug) }}" class="btn btn-primary">Lihat
                                            Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoni">
        <div class="container-fluid my-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-bold text-primary mb-3 card-title"><i class="fa-regular fa-comments"></i> Testimoni</h4>
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($testimonials as $index => $testimonial)
                                <div class="carousel-item @if ($index === 0) active @endif">
                                    <div class="row mb-3 justify-content-center">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card" style="max-width: 540px; margin: auto;">
                                                <div class="d-flex">
                                                    <img src="{{ URL::asset('storage/' . $testimonial->img_path) }}"
                                                        class="img-fluid rounded-circle border m-3" alt="User"
                                                        style="height: 60px; width: 60px; object-fit: cover; aspect-ratio: 1;">
                                                    <div class="card-body d-flex flex-column justify-content-between">
                                                        <h5 class="card-title">{{ $testimonial->name }}</h5>
                                                        <p class="card-text fst-italic">"{{ $testimonial->content }}"</p>
                                                        <p class="card-text"><small
                                                                class="text-muted">{{ \Carbon\Carbon::parse($testimonial->testimonial_date)->diffForHumans() }}</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev text-dark" type="button" data-bs-target="#testimonialCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next text-dark" type="button" data-bs-target="#testimonialCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
