@extends('layout.layout')

@section('konten')
    @include('components.hero')
    <div class="container">
        @include('components.alert.alert')
        <div class="card">
            <div class="card-body">
                <form action="{{ route('formulir.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                    @include('user.formulir.riwayat-identitas')
                    @include('user.formulir.riwayat-kesehatan')
                    @include('user.formulir.riwayat-keluarga')
                    @include('user.formulir.keluhan')
                    @include('components.button.btn-submit')
                </form>
            </div>
        </div>
    </div>
@endsection
