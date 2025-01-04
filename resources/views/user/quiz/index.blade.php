@extends('layout.layout')

@section('konten')
    <div class="container mt-5" style="min-height: 80vh;">
        <div class="card shadow-sm" style="height: 30em; display: flex; flex-direction: column;">
            <div class="card-body d-flex flex-column">
                <!-- Pertanyaan -->
                <h5 class="card-title">
                    {{ $currentIndex + 1 }}. {{ $currentQuestion->question }}
                </h5>

                <form class="mt-3">
                    <div class="form-check rounded-3 p-2">
                        <input class="btn-check" type="radio" name="answer" id="benar" value="Benar">
                        <label class="btn btn-outline-primary" for="benar">
                            Benar
                        </label>
                    </div>

                    <div class="form-check rounded-3 p-2">
                        <input class="btn-check" type="radio" name="answer" id="salah" value="Salah">
                        <label class="btn btn-outline-primary" for="salah">
                            Salah
                        </label>
                    </div>
                </form>

                <div class="card bg-third text-light jawaban mb-3 mt-auto py-3 hide">
                    <div class="card-body">
                        Jawaban yang tepat adalah <span class="fw-bold">{{ $currentQuestion->answer }}</span>,
                        {{ $currentQuestion->answer_desc }}
                    </div>
                </div>

                <!-- Tombol Navigasi -->
                <div class="mt-auto">
                    <div class="d-flex justify-content-between mt-4 mb-0">
                        @if (!$isFirstQuestion)
                            <a href="{{ route('quiz', ['index' => $currentIndex - 1]) }}" class="btn btn-light">Kembali</a>
                        @else
                            <a href="{{ route('home') }}" class="btn btn-light">Kembali</a>
                        @endif

                        @if (!$isLastQuestion)
                            <a href="{{ route('quiz', ['index' => $currentIndex + 1]) }}"
                                class="btn btn-primary">Selanjutnya</a>
                        @else
                            <a href="{{ route('quiz') }}" class="btn btn-primary">Tes Ulang</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('.jawaban').hide();

            $('.btn-check').on('click', function() {
                $('.jawaban').show();
                $('.btn-check').attr('disabled', true);
            });
        });
    </script>
@endpush
