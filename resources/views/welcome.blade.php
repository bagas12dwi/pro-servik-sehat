@extends('layout.layout')

@section('konten')
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

    <section id="testimoni">
        <div class="container-fluid my-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-bold text-primary mb-3 card-title"><i class="fa-regular fa-comments"></i> Testimoni</h4>
                    <div class="row mb-3 justify-content-center">
                        @foreach ($testimonials as $testimonial)
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card" style="max-width: 540px; height: 200px; margin: auto;">
                                    <div class="d-flex">
                                        <img src="{{ URL::asset('storage/' . $testimonial->img_path) }}"
                                            class="img-fluid rounded-circle border m-3" alt="User"
                                            style="height: 60px; width: 60px; object-fit: cover; aspect-ratio: 1;">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <h5 class="card-title">{{ $testimonial->name }}</h5>
                                            <p class="card-text">"{{ $testimonial->content }}"</p>
                                            <p class="card-text"><small
                                                    class="text-muted">{{ \Carbon\Carbon::parse($testimonial->testimonial_date)->diffForHumans() }}</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
