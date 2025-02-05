@extends('layout.layout')

@section('konten')
    <div class="container mt-5" style="min-height: 80vh;">
        <div class="card shadow-sm" style="height: 30em; display: flex; flex-direction: column;">
            <div class="card-body d-flex flex-column">
                <!-- Pertanyaan -->
                <h5 class="card-title">
                    {{ $currentIndex + 1 }}. {{ $currentQuestion->question }}
                </h5>

                <form method="POST"
                    action="{{ $isLastQuestion ? route('tes-resiko.store') : route('tes-resiko.next', ['index' => $currentIndex]) }}"
                    class="mt-3">
                    @csrf
                    <div class="konten">

                        @if ($currentIndex == 0)
                            <div class="form-check rounded-3 p-2">
                                <input class="btn-check" type="radio" name="usia" id="kurangDuaPuluh" value="Benar">
                                <label class="btn btn-outline-primary" for="kurangDuaPuluh">
                                    < 20 Tahun </label>
                            </div>

                            <div class="form-check rounded-3 p-2">
                                <input class="btn-check" type="radio" name="usia" id="duapuluh" value="Salah">
                                <label class="btn btn-outline-primary" for="duapuluh">
                                    20 - 30 Tahun
                                </label>
                            </div>

                            <div class="form-check rounded-3 p-2">
                                <input class="btn-check" type="radio" name="usia" id="tigapuluh" value="Sangat">
                                <label class="btn btn-outline-primary" for="tigapuluh">
                                    30 - 69 Tahun
                                </label>
                            </div>
                        @else
                            <div class="form-check rounded-3 p-2">
                                <input class="btn-check" type="radio" name="answer" id="ya" value="Ya">
                                <label class="btn btn-outline-primary" for="ya">
                                    Ya
                                </label>
                            </div>

                            <div class="form-check rounded-3 p-2">
                                <input class="btn-check" type="radio" name="answer" id="tidak" value="Tidak">
                                <label class="btn btn-outline-primary" for="tidak">
                                    Tidak
                                </label>
                            </div>
                        @endif
                    </div>
                    <!-- Tombol Navigasi -->
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between mt-4 mb-0">
                            @if ($isLastQuestion)
                                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            @else
                                <button type="submit" class="btn btn-primary mt-3">Lanjut</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
