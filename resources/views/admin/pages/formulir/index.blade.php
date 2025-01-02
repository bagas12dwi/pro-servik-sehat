@extends('admin.layouts.default')

@section('content')
    <div class="container-xl">
        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Detail {{ $title }}</h1>
            </div>
        </div>

        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body p-3">
                <form action="{{ route('admin.formulir.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                    @include('admin.pages.formulir.pemeriksaan-payudara')
                    @include('admin.pages.formulir.pemeriksaan-ginekologi')
                    @include('admin.pages.formulir.pemeriksaan-krioterapi')
                    @include('admin.components.button.btn-submit', ['label' => 'Simpan'])
                </form>
            </div><!--//app-card-body-->
        </div><!--//app-card-->
    </div><!--//container-fluid-->
@endsection
