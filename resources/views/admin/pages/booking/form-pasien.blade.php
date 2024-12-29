@extends('admin.layouts.default')

@section('content')
    <div class="container-xl">
        <a href="{{ route('admin.booking.show', $data->id) }}" class="btn btn-primary text-white mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-left me-2" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
            </svg> Kembali
        </a>
        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Detail {{ $title }}</h1>
            </div>
        </div>

        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body p-3">
                @include('admin.pages.booking.identitas')
                @include('admin.pages.booking.kesehatan')
                @include('admin.pages.booking.keluarga')
                @include('admin.pages.booking.keluhan')
            </div><!--//app-card-body-->
        </div><!--//app-card-->

    </div><!--//container-fluid-->
@endsection
