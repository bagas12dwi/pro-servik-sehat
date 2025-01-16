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
                            ])
                        </div><!--//col-->
                        {{-- <div class="col-auto">
                            @include('admin.components.button.btn-link', [
                                'route' => route('admin.formulir', $data->id),
                                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                class="bi bi-pencil-square me-2" viewBox="0 0 16 16">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <path
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <path fill-rule="evenodd"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </svg>',
                                'label' => 'Lihat Formulir Pemeriksaan',
                            ])
                        </div> --}}
                        <div class="col-auto">
                            @if ($data->status_form == 2)
                                <a href="{{ route('print', $data->id) }}" target="_blank" class="btn btn-danger text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-file-earmark-pdf me-2" viewBox="0 0 16 16">
                                        <path
                                            d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                        <path
                                            d="M4.603 14.087a.8.8 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.7 7.7 0 0 1 1.482-.645 20 20 0 0 0 1.062-2.227 7.3 7.3 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a11 11 0 0 0 .98 1.686 5.8 5.8 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.86.86 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.7 5.7 0 0 1-.911-.95 11.7 11.7 0 0 0-1.997.406 11.3 11.3 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.8.8 0 0 1-.58.029m1.379-1.901q-.25.115-.459.238c-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361q.016.032.026.044l.035-.012c.137-.056.355-.235.635-.572a8 8 0 0 0 .45-.606m1.64-1.33a13 13 0 0 1 1.01-.193 12 12 0 0 1-.51-.858 21 21 0 0 1-.5 1.05zm2.446.45q.226.245.435.41c.24.19.407.253.498.256a.1.1 0 0 0 .07-.015.3.3 0 0 0 .094-.125.44.44 0 0 0 .059-.2.1.1 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a4 4 0 0 0-.612-.053zM8.078 7.8a7 7 0 0 0 .2-.828q.046-.282.038-.465a.6.6 0 0 0-.032-.198.5.5 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822q.036.167.09.346z" />
                                    </svg>
                                    Cetak Formulir
                                </a>
                            @endif
                        </div>
                    </div><!--//row-->
                </div><!--//table-utilities-->
            </div><!--//col-auto-->
        </div>

        <div class="app-card app-card-borders-table shadow mb-3">
            <div class="app-card-body p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="fw-bold mb-3">Update Progress Sampel</h5>
                    @if (isset($data->document_path))
                        <a href="{{ URL::asset('storage/' . $data->document_path) }}" target="_blank"
                            class="btn btn-danger text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-file-earmark-pdf me-2" viewBox="0 0 16 16">
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                <path
                                    d="M4.603 14.087a.8.8 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.7 7.7 0 0 1 1.482-.645 20 20 0 0 0 1.062-2.227 7.3 7.3 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a11 11 0 0 0 .98 1.686 5.8 5.8 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.86.86 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.7 5.7 0 0 1-.911-.95 11.7 11.7 0 0 0-1.997.406 11.3 11.3 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.8.8 0 0 1-.58.029m1.379-1.901q-.25.115-.459.238c-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361q.016.032.026.044l.035-.012c.137-.056.355-.235.635-.572a8 8 0 0 0 .45-.606m1.64-1.33a13 13 0 0 1 1.01-.193 12 12 0 0 1-.51-.858 21 21 0 0 1-.5 1.05zm2.446.45q.226.245.435.41c.24.19.407.253.498.256a.1.1 0 0 0 .07-.015.3.3 0 0 0 .094-.125.44.44 0 0 0 .059-.2.1.1 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a4 4 0 0 0-.612-.053zM8.078 7.8a7 7 0 0 0 .2-.828q.046-.282.038-.465a.6.6 0 0 0-.032-.198.5.5 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822q.036.167.09.346z" />
                            </svg>
                            Lihat Hasil Pemeriksaan
                        </a>
                    @endif
                </div>
                <form action="{{ route('admin.hasil-pemeriksaan.update', $data->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="" class="form-label">Progress Sampel</label>
                        <select class="form-select form-select" name="result_form" id="result_form">
                            <option value="0" {{ $data->result_form == '0' ? 'selected' : '' }}>Pengambilan Sampel
                            </option>
                            <option value="1" {{ $data->result_form == '1' ? 'selected' : '' }}>Pengiriman Sampel Ke
                                Laborat</option>
                            <option value="2" {{ $data->result_form == '2' ? 'selected' : '' }}>Analisa Sampel</option>
                            <option value="3" {{ $data->result_form == '3' ? 'selected' : '' }}>Validasi Hasil Sampel
                            </option>
                            <option value="4" {{ $data->result_form == '4' ? 'selected' : '' }}>Informasi Hasil Sampel
                            </option>
                            <option value="5" {{ $data->result_form == '5' ? 'selected' : '' }}>Tindak Lanjut</option>
                        </select>
                    </div>
                    @include('components.form.input-file', [
                        'name' => 'document_path',
                        'label' => 'Upload Dokumen Hasil Pemeriksaan',
                        'helperText' => 'Upload .pdf Dokumen Hasil Pemeriksaan',
                    ])
                    <button class="btn btn-primary text-white" type="submit">Update</button>

                </form>
            </div>
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
