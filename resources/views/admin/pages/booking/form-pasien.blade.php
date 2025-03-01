@extends('admin.layouts.default')

@section('content')
    <div class="container-xl">
        <div class="d-flex justify-content-between">
            @include('admin.components.button.btn-link', [
                'route' => url()->previous(),
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                                                                                    class="bi bi-arrow-left me-2" viewBox="0 0 16 16">
                                                                                                                    <path fill-rule="evenodd"
                                                                                                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                                                                                                                </svg>',
                'label' => 'Kembali',
            ])
            @include('admin.components.button.btn-link', [
                'route' => route('admin.formulir', $data->id),
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                                                                        class="bi bi-pencil-square me-2" viewBox="0 0 16 16">
                                                                                                        <path
                                                                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                                                        <path fill-rule="evenodd"
                                                                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                                                                    </svg>',
                'label' => 'Isi Formulir Pemeriksaan',
            ])
        </div>
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
