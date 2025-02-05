@extends('layout.layout')

@section('konten')
    <div class="container mt-5" style="min-height: 80vh;">
        <div class="card shadow-sm" style="height: 30em; display: flex; flex-direction: column;">
            <div class="card-body d-flex flex-column">
                <h2>Isi Biodata Berikut</h2>
                <form action="{{ route('tes-resiko.biodata.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-auto">Mulai Quiz</button>
                </form>
            </div>
        </div>
    </div>
@endsection
