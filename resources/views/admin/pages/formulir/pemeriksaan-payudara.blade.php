<h4 class="card-title text-primary mb-3">Pemeriksaan Payudara</h4>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <h5 class="card-title text-primary mb-3">Kanan</h5>
        @include('components.form.label', [
            'id' => 'kulit-kanan',
            'label' => '1. Kulit',
        ])

        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'kulit-kanan-normal',
                'label' => 'Normal',
                'value' => 'Normal',
                'name' => 'kulit_kanan',
                'db' => $data->kulit_kanan ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'kulit-kanan-abnormal',
                'label' => 'Abnormal',
                'value' => 'Abnormal',
                'name' => 'kulit_kanan',
                'db' => $data->kulit_kanan ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'kulit-kanan-kulit-jeruk',
                'label' => 'Kulit Jeruk',
                'value' => 'Kulit Jeruk',
                'name' => 'kulit_kanan',
                'db' => $data->kulit_kanan ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'kulit-kanan-luka-basah',
                'label' => 'Luka Basah',
                'value' => 'Luka Basah',
                'name' => 'kulit_kanan',
                'db' => $data->kulit_kanan ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'kulit-kanan-penarikan-kulit',
                'label' => 'Penarikan Kulit',
                'value' => 'Penarikan Kulit',
                'name' => 'kulit_kanan',
                'db' => $data->kulit_kanan ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'kulit-kanan-lainnya',
                'label' => 'Lainnya',
                'value' => 'Lainnya',
                'name' => 'kulit_kanan',
                'db' => $data->kulit_kanan ?? '',
                'dbDesc' => $data->kulit_kanan_desc ?? '',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'aerola-kanan',
            'label' => '2. Aerola',
        ])

        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'aerola-kanan-normal',
                'label' => 'Normal',
                'value' => 'Normal',
                'name' => 'aerola_kanan',
                'db' => $data->aerola_kanan ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'aerola-kanan-abnormal',
                'label' => 'Abnormal',
                'value' => 'Abnormal',
                'name' => 'aerola_kanan',
                'db' => $data->aerola_kanan ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'aerola-kanan-retraksi',
                'label' => 'Retraksi',
                'value' => 'Retraksi',
                'name' => 'aerola_kanan',
                'db' => $data->aerola_kanan ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'aerola-kanan-luka-basah',
                'label' => 'Luka Basah',
                'value' => 'Luka Basah',
                'name' => 'aerola_kanan',
                'db' => $data->aerola_kanan ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'aerola-kanan-cairan',
                'label' => 'Cairan abnormal dari puting',
                'value' => 'Cairan abnormal dari puting',
                'name' => 'aerola_kanan',
                'db' => $data->aerola_kanan ?? '',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'benjolan-kanan',
            'label' => '3. Ada Benjolan/Kelainan',
        ])

        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'benjolan-kanan-tidak',
                'label' => 'Tidak',
                'value' => 'Tidak',
                'name' => 'benjolan_kanan',
                'db' => $data->benjolan_kanan ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'benjolan-kanan-ada',
                'label' => 'Ada',
                'value' => 'Ada',
                'name' => 'benjolan_kanan',
                'db' => $data->benjolan_kanan ?? '',
                'dbDesc' => $data->benjolan_kanan_desc ?? '',
                'satuan' => 'cm',
            ])
        </div>
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'melekat-kanan-melekat',
                'label' => 'Melekat',
                'value' => 'Melekat',
                'name' => 'melekat_kanan',
                'db' => $data->melekat_kanan ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'melekat-kanan-tidak',
                'label' => 'Tidak Melekat',
                'value' => 'Tidak Melekat',
                'name' => 'melekat_kanan',
                'db' => $data->melekat_kanan ?? '',
            ])
        </div>
        @include('components.form.input-file', [
            'name' => 'gambar_payudara_kanan',
            'label' => '4. Gambar Pemeriksaan Payudara Kanan',
            'helperText' => 'Ukuran file maksimal 2MB',
        ])
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <h5 class="card-title text-primary mb-3">Kiri</h5>
        @include('components.form.label', [
            'id' => 'kulit-kiri',
            'label' => '1. Kulit',
        ])

        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'kulit-kiri-normal',
                'label' => 'Normal',
                'value' => 'Normal',
                'name' => 'kulit_kiri',
                'db' => $data->kulit_kiri ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'kulit-kiri-abnormal',
                'label' => 'Abnormal',
                'value' => 'Abnormal',
                'name' => 'kulit_kiri',
                'db' => $data->kulit_kiri ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'kulit-kiri-kulit-jeruk',
                'label' => 'Kulit Jeruk',
                'value' => 'Kulit Jeruk',
                'name' => 'kulit_kiri',
                'db' => $data->kulit_kiri ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'kulit-kiri-luka-basah',
                'label' => 'Luka Basah',
                'value' => 'Luka Basah',
                'name' => 'kulit_kiri',
                'db' => $data->kulit_kiri ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'kulit-kiri-penarikan-kulit',
                'label' => 'Penarikan Kulit',
                'value' => 'Penarikan Kulit',
                'name' => 'kulit_kiri',
                'db' => $data->kulit_kiri ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'kulit-kiri-lainnya',
                'label' => 'Lainnya',
                'value' => 'Lainnya',
                'name' => 'kulit_kiri',
                'db' => $data->kulit_kiri ?? '',
                'dbDesc' => $data->kulit_kiri_desc ?? '',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'aerola-kiri-',
            'label' => '2. Aerola',
        ])

        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'aerola-kiri-normal',
                'label' => 'Normal',
                'value' => 'Normal',
                'name' => 'aerola_kiri',
                'db' => $data->aerola_kiri ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'aerola-kiri-abnormal',
                'label' => 'Abnormal',
                'value' => 'Abnormal',
                'name' => 'aerola_kiri',
                'db' => $data->aerola_kiri ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'aerola-kiri-retraksi',
                'label' => 'Retraksi',
                'value' => 'Retraksi',
                'name' => 'aerola_kiri',
                'db' => $data->aerola_kiri ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'aerola-kiri-luka-basah',
                'label' => 'Luka Basah',
                'value' => 'Luka Basah',
                'name' => 'aerola_kiri',
                'db' => $data->aerola_kiri ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'aerola-kiri-cairan',
                'label' => 'Cairan abnormal dari puting',
                'value' => 'Cairan abnormal dari puting',
                'name' => 'aerola_kiri',
                'db' => $data->aerola_kiri ?? '',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'benjolan-kiri',
            'label' => '3. Ada Benjolan/Kelainan',
        ])

        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'benjolan-kiri-tidak',
                'label' => 'Tidak',
                'value' => 'Tidak',
                'name' => 'benjolan_kiri',
                'db' => $data->benjolan_kiri ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'benjolan-kiri-ada',
                'label' => 'Ada',
                'value' => 'Ada',
                'name' => 'benjolan_kiri',
                'satuan' => 'cm',
                'db' => $data->benjolan_kiri ?? '',
                'dbDesc' => $data->benjolan_kiri_desc ?? '',
            ])
        </div>
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'melekat-kiri-melekat',
                'label' => 'Melekat',
                'value' => 'Melekat',
                'name' => 'melekat_kiri',
                'db' => $data->melekat_kiri ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'melekat-kiri-tidak',
                'label' => 'Tidak Melekat',
                'value' => 'Tidak Melekat',
                'name' => 'melekat_kiri',
                'db' => $data->melekat_kiri ?? '',
            ])
        </div>
        @include('components.form.input-file', [
            'name' => 'gambar_payudara_kiri',
            'label' => '4. Gambar Pemeriksaan Payudara Kiri',
            'helperText' => 'Ukuran file maksimal 2MB',
        ])
    </div>
    <h5 class="card-title text-primary my-3">Hasil Sadanis</h5>
    <div class="ms-3 d-flex gap-2 flex-wrap">
        @include('components.form.input-radio', [
            'id' => 'sadanis-normal',
            'label' => 'Payudara Normal',
            'value' => 'Payudara Normal',
            'name' => 'payudara_normal',
            'db' => $data->payudara_normal ?? '',
        ])
        @include('components.form.input-radio', [
            'id' => 'sadanis-anjuran',
            'label' => 'Anjuran SADARI per bulan',
            'value' => 'Anjuran SADARI per bulan',
            'name' => 'sadanis',
            'db' => $data->sadanis ?? '',
        ])
        @include('components.form.input-radio', [
            'id' => 'sadanis-sadanis',
            'label' => 'SADANIS 1 Tahun',
            'value' => 'SADANIS 1 Tahun',
            'name' => 'sadanis',
            'db' => $data->sadanis ?? '',
        ])
        @include('components.form.input-radio', [
            'id' => 'sadanis-periksa',
            'label' => 'Periksa Mammografi/USG Usia > 40/th',
            'value' => 'Periksa Mammografi/USG Usia > 40/th',
            'name' => 'sadanis',
            'db' => $data->sadanis ?? '',
        ])
        @include('components.form.input-radio', [
            'id' => 'sadanis-benjolan',
            'label' => 'Ada Benjolan/Kelainan',
            'value' => 'Ada Benjolan/Kelainan',
            'name' => 'sadanis',
            'db' => $data->sadanis ?? '',
        ])
        @include('components.form.input-radio', [
            'id' => 'sadanis-rujuk',
            'label' => 'Rujuk untuk pemeriksaan lanjutan',
            'value' => 'Rujuk untuk pemeriksaan lanjutan',
            'name' => 'sadanis',
            'db' => $data->sadanis ?? '',
        ])
        @include('components.form.input-radio', [
            'id' => 'sadanis-curiga',
            'label' => 'Curiga Kanker Payudara',
            'value' => 'Curiga Kanker Payudara',
            'name' => 'sadanis',
            'db' => $data->sadanis ?? '',
        ])
        @include('components.form.input-radio', [
            'id' => 'sadanis-harus',
            'label' => 'HARUS SEGERA Rujuk untuk pemeriksaan lanjutan',
            'value' => 'HARUS SEGERA Rujuk untuk pemeriksaan lanjutan',
            'name' => 'sadanis',
            'db' => $data->sadanis ?? '',
        ])
    </div>
</div>


@push('script')
    <script>
        $(document).ready(function() {
            $('input[name="kulit_kanan"]').on('change', function() {
                if ($(this).val() === 'Lainnya') {
                    $('#kulit-kanan-lainnya-wrapper-text').removeClass('d-none').find('input').prop(
                        'disabled',
                        false);
                } else {
                    $('#kulit-kanan-lainnya-wrapper-text').addClass('d-none').find('input').prop(
                        'disabled',
                        true);
                }
            });
            $('input[name="kulit_kanan"]:checked').trigger('change');

            $('input[name="kulit_kiri"]').on('change', function() {
                if ($(this).val() === 'Lainnya') {
                    $('#kulit-kiri-lainnya-wrapper-text').removeClass('d-none').find('input').prop(
                        'disabled',
                        false);
                } else {
                    $('#kulit-kiri-lainnya-wrapper-text').addClass('d-none').find('input').prop(
                        'disabled',
                        true);
                }
            });

            $('input[name="kulit_kiri"]:checked').trigger('change');

            $('input[name="benjolan_kanan"]').on('change', function() {

                if ($(this).val() === 'Ada') {
                    $('#benjolan-kanan-ada-wrapper-text').removeClass('d-none').find('input').prop(
                        'disabled',
                        false);
                } else {
                    $('#benjolan-kanan-ada-wrapper-text').addClass('d-none').find('input').prop(
                        'disabled',
                        true);
                }
            });

            $('input[name="benjolan_kanan"]:checked').trigger('change');

            $('input[name="benjolan_kiri"]').on('change', function() {

                if ($(this).val() === 'Ada') {
                    $('#benjolan-kiri-ada-wrapper-text').removeClass('d-none').find('input').prop(
                        'disabled',
                        false);
                } else {
                    $('#benjolan-kiri-ada-wrapper-text').addClass('d-none').find('input').prop(
                        'disabled',
                        true);
                }
            });

            $('input[name="benjolan_kiri"]:checked').trigger('change');
        })
    </script>
@endpush
