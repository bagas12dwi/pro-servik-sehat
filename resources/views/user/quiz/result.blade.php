@extends('layout.layout')

@section('konten')
    <div class="container mt-5" style="min-height: 80vh;">
        <div class="card shadow-sm" style="height: 30em; display: flex; flex-direction: column;">
            <div class="card-body d-flex flex-column">
                <h2>Hasil Quiz</h2>
                <p>Selamat! Kamu telah berhasil menyelesaikan quiz ini. Total jawaban yang benar: {{ $correctCount }} dari
                    total: {{ $questionsCount }} soal.
                    Semangat terus untuk belajar!</p>
                <div class="d-flex justify-content-between mt-auto mb-0">
                    <a href="{{ route('home') }}" class="btn btn-light">Kembali Ke Halaman Utama</a>
                    <a href="{{ route('quiz', ['index' => 0]) }}" class="btn btn-primary mt-auto">Ulangi Tes</a>
                </div>
            </div>
        </div>
    </div>
@endsection
