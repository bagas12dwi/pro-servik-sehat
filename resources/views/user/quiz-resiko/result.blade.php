@extends('layout.layout')

@section('konten')
    <div class="container mt-5" style="min-height: 80vh;">
        <div class="card shadow-sm" style="height: 30em; display: flex; flex-direction: column;">
            <div class="card-body d-flex flex-column">
                <h2>Hasil Tes Risiko</h2>
                <h4 class="fw-bold">
                    @if (session('high'))
                        Berisiko Tinggi
                    @elseif (session('normal'))
                        Berisiko
                    @endif
                </h4>
                <p>{{ session('high') ?? session('normal') }}</p>
                <div class="d-flex justify-content-between mt-auto mb-0">
                    <a href="{{ route('home') }}" class="btn btn-light">Kembali Ke Halaman Utama</a>
                    <a href="{{ route('tes-resiko', ['index' => 0]) }}" class="btn btn-primary mt-auto">Ulangi Tes</a>
                </div>
            </div>
        </div>
    </div>
@endsection
