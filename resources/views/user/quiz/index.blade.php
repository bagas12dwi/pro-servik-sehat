@extends('layout.layout')

@section('konten')
    <div class="container mt-5" style="min-height: 80vh;">
        <div class="card shadow-sm" style="height: 30em; display: flex; flex-direction: column;">
            <div class="card-body d-flex flex-column">
                <!-- Pertanyaan -->
                <h5 class="card-title">
                    {{ $currentIndex + 1 }}. {{ $currentQuestion->question }}
                </h5>

                <!-- Form untuk mengirim jawaban -->
                <form class="mt-3" method="POST" action="{{ route('quiz.submit', ['index' => $currentIndex]) }}">
                    @csrf

                    <div class="form-check rounded-3 p-2">
                        <input class="btn-check" type="radio" name="answer" id="benar" value="Benar" required>
                        <label class="btn btn-outline-primary" for="benar">Benar</label>
                    </div>

                    <div class="form-check rounded-3 p-2">
                        <input class="btn-check" type="radio" name="answer" id="salah" value="Salah" required>
                        <label class="btn btn-outline-primary" for="salah">Salah</label>
                    </div>

                    <div class="card bg-third text-light jawaban mb-3 mt-auto py-3 hide">
                        <div class="card-body">
                            Jawaban yang tepat adalah <span class="fw-bold">{{ $currentQuestion->answer }}</span>,
                            {{ $currentQuestion->answer_desc }}
                        </div>
                    </div>

                    <!-- Tombol Navigasi -->
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between mt-4 mb-0">
                            @if ($isLastQuestion)
                                {{-- <a href="{{ route('quiz.result') }}" class="btn btn-primary">Lihat Hasil</a> --}}
                                <button type="submit" class="btn btn-primary mt-3">Lihat Hasil</button>
                            @else
                                <button type="submit" class="btn btn-primary mt-3">Lanjut</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>

            <!-- Jawaban yang benar -->

        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('.jawaban').hide();

            $('.btn-check').on('click', function() {
                $('.jawaban').show();
                $('.btn-check').not(this).attr('disabled', true);
            });
        });
    </script>
@endpush
