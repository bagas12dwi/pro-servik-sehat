@extends('layout.layout')

@section('konten')
    @include('components.hero')
    <div class="container">
        @include('components.alert.alert')
        <div class="card">
            <div class="card-body">
                @forelse ($bookings as $booking)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="card-title">{{ $booking->document_no }}</h4>
                                <a href="{{ route('hasil-pemeriksaan.show', $booking->id) }}" class="btn btn-third">Lihat
                                    Detail</a>
                            </div>
                            <p class="card-text">{{ date('d F Y, H:i', strtotime($booking->inspection_date)) }}</p>
                            <p class="card-text">Atas Nama : {{ $booking->name }} ({{ $booking->nik }})</p>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {});
    </script>
@endpush
