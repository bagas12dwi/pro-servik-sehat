@extends('layout.layout')

@section('konten')
    @include('components.hero')
    <div class="container">
        @include('components.alert.alert')
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-primary mb-3">Booking Jadwal</h4>
                <form action="{{ route('booking.store') }}" method="post">
                    @csrf
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
                        'label' => 'Alamat',
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
                    @include('components.button.btn-submit')
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#phone_number').on('keyup', function() {
                var phoneNumber = $(this).val();
                var errorMessageId = '#error-message-' + $(this).attr('id');

                // Regex for Indonesian phone number (starts with 62, followed by 8–12 digits)
                var phoneRegex = /^(62)[0-9]{8,12}$/;

                if (phoneRegex.test(phoneNumber)) {
                    // Valid phone number
                    $(errorMessageId).prop('hidden', true);
                } else {
                    // Invalid phone number
                    $(errorMessageId).prop('hidden', false);
                }
            });

            $('#birth_date').on('change', function() {
                const birthDate = new Date($(this).val());
                const today = new Date();

                if (!isNaN(birthDate)) {
                    // Calculate age
                    let age = today.getFullYear() - birthDate.getFullYear();
                    const monthDiff = today.getMonth() - birthDate.getMonth();

                    // Adjust age if the birthday hasn't occurred yet this year
                    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                        age--;
                    }

                    // Set the calculated age in the 'age' input field
                    $('#age').val(age);
                } else {
                    // Clear the age if the date is invalid
                    $('#age').val('');
                }
            });
        });
    </script>
@endpush
