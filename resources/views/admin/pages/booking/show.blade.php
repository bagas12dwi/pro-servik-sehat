@extends('admin.layouts.default')

@section('content')
    <div class="container-xl">

        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Detail {{ $title }}</h1>
            </div>
            <div class="col-auto">
                <div class="page-utilities">
                    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                        <div class="col-auto">
                            @include('admin.components.button.btn-link', [
                                'route' => route('admin.booking.form', $data->id),
                                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                                                                                                                                                                                                                                                                                            class="bi bi-card-checklist me-2" viewBox="0 0 16 16">
                                                                                                                                                                                                                                                                                                                            <path
                                                                                                                                                                                                                                                                                                                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                                                                                                                                                                                                                                                                                                                            <path
                                                                                                                                                                                                                                                                                                                                d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0" />
                                                                                                                                                                                                                                                                                                                                </svg>',
                                'label' => 'Lihat Formulir Pasien',
                                'from' => 'Booking',
                            ])
                        </div><!--//col-->
                        <div class="col-auto">
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
                    </div><!--//row-->
                </div><!--//table-utilities-->
            </div><!--//col-auto-->
        </div>

        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body p-3">
                @include('components.form.input-number', [
                    'db' => $data->nik ?? '',
                    'id' => 'nik',
                    'label' => 'NIK',
                    'placeholder' => 'Masukkan NIK',
                ])
                @include('components.form.input-text', [
                    'db' => $data->name ?? '',
                    'id' => 'name',
                    'label' => 'Nama Lengkap',
                    'placeholder' => 'Masukkan Nama Lengkap',
                ])
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        @include('components.form.input-text', [
                            'db' => $data->origin ?? '',
                            'id' => 'origin',
                            'label' => 'Asal/Suku',
                            'placeholder' => 'Masukkan Asal/Suku',
                        ])
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        @include('components.form.input-text', [
                            'db' => $data->religion ?? '',
                            'id' => 'religion',
                            'label' => 'Agama',
                            'placeholder' => 'Masukkan Agama',
                        ])
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        @include('components.form.input-text', [
                            'db' => $data->place_of_birth ?? '',
                            'id' => 'place_of_birth',
                            'label' => 'Tempat Lahir',
                            'placeholder' => 'Masukkan Tempat Lahir',
                        ])
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        @include('components.form.input-date', [
                            'db' => $data->birth_date ?? date('Y-m-d'),
                            'id' => 'birth_date',
                            'label' => 'Tanggal Lahir',
                            'placeholder' => 'Masukkan Tanggal Lahir',
                        ])
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        @include('components.form.input-number', [
                            'db' => $data->age ?? '',
                            'id' => 'age',
                            'label' => 'Umur',
                            'placeholder' => 'Masukkan Umur',
                            'readonly' => 'readonly',
                        ])
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        @include('components.form.input-number', [
                            'db' => $data->weight ?? '',
                            'id' => 'weight',
                            'label' => 'Berat Badan',
                            'placeholder' => 'Masukkan Berat Badan',
                        ])
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        @include('components.form.input-number', [
                            'db' => $data->height ?? '',
                            'id' => 'height',
                            'label' => 'Tinggi Badan',
                            'placeholder' => 'Masukkan Tinggi Badan',
                        ])
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        @include('components.form.input-text', [
                            'db' => $data->blood_type ?? '',
                            'id' => 'blood_type',
                            'label' => 'Golongan Darah',
                            'placeholder' => 'Masukkan Golongan Darah',
                        ])
                    </div>
                </div>
                @include('components.form.input-number', [
                    'db' => $data->phone_number ?? '',
                    'id' => 'phone_number',
                    'label' => 'No. Telepon',
                    'placeholder' => 'Masukkan No. Telepon',
                    'errorMessage' => 'Inputkan dengan awalan (62xxxxxxxx)',
                ])
                @include('components.form.input-text', [
                    'db' => $data->husband_name ?? '',
                    'id' => 'husband_name',
                    'label' => 'Nama Suami',
                    'placeholder' => 'Masukkan Nama Suami',
                ])
                @include('components.form.input-text-area', [
                    'db' => $data->address ?? '',
                    'id' => 'address',
                    'label' => 'Alamat Domisili',
                ])
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    @include('components.form.input-text', [
                        'db' => $data->area_code ?? '',
                        'id' => 'area_code',
                        'label' => 'RT/RW',
                        'placeholder' => 'Masukkan RT/RW',
                    ])
                    @include('components.form.input-text', [
                        'db' => $data->subdistrict ?? '',
                        'id' => 'subdistrict',
                        'label' => 'Desa/Kelurahan',
                        'placeholder' => 'Masukkan Desa/Kelurahan',
                    ])
                    @include('components.form.input-text', [
                        'db' => $data->district ?? '',
                        'id' => 'district',
                        'label' => 'Kecamatan',
                        'placeholder' => 'Masukkan Kecamatan',
                    ])
                    @include('components.form.input-text', [
                        'db' => $data->city ?? '',
                        'id' => 'city',
                        'label' => 'Kabupatan/Kota',
                        'placeholder' => 'Masukkan Kabupatan/Kota',
                    ])
                    @include('components.form.input-text', [
                        'db' => $data->province ?? '',
                        'id' => 'province',
                        'label' => 'Provinsi',
                        'placeholder' => 'Masukkan Provinsi',
                    ])
                </div>
                @include('components.form.input-select', [
                    'db' => $selectedLocation ?? '',
                    'id' => 'location',
                    'label' => 'Lokasi Pemeriksaan',
                    'data' => $locations,
                ])
                @include('components.form.input-date-time', [
                    'db' => $data->inspection_date ?? date('Y-m-d H:i'),
                    'id' => 'inspection_date',
                    'label' => 'Tanggal Pemeriksaan',
                    'placeholder' => 'Masukkan Tanggal',
                ])
            </div><!--//app-card-body-->
        </div><!--//app-card-->

    </div><!--//container-fluid-->
@endsection
