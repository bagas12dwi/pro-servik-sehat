@extends('layout.layout')

@section('konten')
    <section id="header">
        <div class="jumbotron">
            <div class="jumbotron-overlay"></div>
            <div class="jumbotron-content">
                <h3>Selamat Datang di Web Kami</h3>
                <div class="container">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eum veniam illo aliquam, ullam,
                        accusamus
                        tempora error at suscipit ea quos odio expedita fugiat eius nam sit obcaecati consequuntur non.</p>
                </div>
                <a href="#" class="btn btn-primary">Mulai Quiz</a>
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
                    <div class="d-flex gap-3">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="card" style="max-width: 540px; margin: auto;">
                                <div class="d-flex">
                                    <img src="{{ URL::asset('assets/img/profile.jpg') }}"
                                        class="img-fluid rounded-circle border m-3" alt="User"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">John Doe</h5>
                                        <p class="card-text">"Pengalaman saya menggunakan layanan ini sangat luar biasa.
                                            Saya
                                            merasa sangat terbantu dan puas dengan hasilnya."</p>
                                        <p class="card-text"><small class="text-muted">2 days ago</small></p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
