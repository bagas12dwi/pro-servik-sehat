<h4 class="card-title text-primary mb-3">Riwayat Identitas</h4>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        @include('components.form.label', [
            'id' => 'status-nikah',
            'label' => '1. Status Kawin Klien',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'status-nikah-klien-belum',
                'label' => 'Belum/belum hub.sex',
                'value' => 'Belum/belum hub.sex',
                'name' => 'status_nikah_klien',
                'db' => $data->status_nikah_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'status-nikah-klien-sekali',
                'label' => 'Menikah Sekali',
                'value' => 'Menikah Sekali',
                'name' => 'status_nikah_klien',
                'db' => $data->status_nikah_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'status-nikah-klien-ke',
                'label' => 'Menikah Ke',
                'value' => 'Menikah Ke',
                'name' => 'status_nikah_klien',
                'db' => $data->status_nikah_klien ?? '',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'status-nikah-suami',
            'label' => '2. Status Kawin Suami',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'status-nikah-suami-sekali',
                'label' => 'Menikah Sekali',
                'value' => 'Menikah Sekali',
                'name' => 'status_nikah_suami',
                'db' => $data->status_nikah_suami ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'status-nikah-suami-ke',
                'label' => 'Menikah Ke',
                'value' => 'Menikah Ke',
                'name' => 'status_nikah_suami',
                'db' => $data->status_nikah_suami ?? '',
            ])
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        @include('components.form.label', [
            'id' => 'pendidikan',
            'label' => '3. Pendidikan Klien',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'pendidikan-klien',
                'label' => 'Tidak Sekolah',
                'value' => 'Tidak Sekolah',
                'name' => 'pendidikan_klien',
                'db' => $data->pendidikan_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pendidikan-tidak-tamat-sd',
                'label' => 'Tidak Tamat SD',
                'value' => 'Tidak Tamat SD',
                'name' => 'pendidikan_klien',
                'db' => $data->pendidikan_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pendidikan-klien-tamat-sd',
                'label' => 'Tamat SD',
                'value' => 'Tamat SD',
                'name' => 'pendidikan_klien',
                'db' => $data->pendidikan_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pendidikan-klien-tamat-smp',
                'label' => 'Tamat SMP',
                'value' => 'Tamat SMP',
                'name' => 'pendidikan_klien',
                'db' => $data->pendidikan_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pendidikan-klien-tamat-sma',
                'label' => 'Tamat SMA/Diploma Sarjana',
                'value' => 'Tamat SMA/Diploma Sarjana',
                'name' => 'pendidikan_klien',
                'db' => $data->pendidikan_klien ?? '',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'pekerjaan',
            'label' => '4. Pekerjaan Klien',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'pekerjaan-klien-tni',
                'label' => 'TNI/Polri',
                'value' => 'TNI/Polri',
                'name' => 'pekerjaan_klien',
                'db' => $data->pekerjaan_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pekerjaan-klien-pensiunan',
                'label' => 'Pensiunan',
                'value' => 'Pensiunan',
                'name' => 'pekerjaan_klien',
                'db' => $data->pekerjaan_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pekerjaan-klien-guru',
                'label' => 'Guru/Dosen',
                'value' => 'Guru/Dosen',
                'name' => 'pekerjaan_klien',
                'db' => $data->pekerjaan_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pekerjaan-klien-pedagang',
                'label' => 'Pedagang/Wirausaha',
                'value' => 'Pedagang/Wirausaha',
                'name' => 'pekerjaan_klien',
                'db' => $data->pekerjaan_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pekerjaan-klien-irt',
                'label' => 'Ibu Rumah Tangga',
                'value' => 'Ibu Rumah Tangga',
                'name' => 'pekerjaan_klien',
                'db' => $data->pekerjaan_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pekerjaan-klien-staff',
                'label' => 'Staff Kantor',
                'value' => 'Staff Kantor',
                'name' => 'pekerjaan_klien',
                'db' => $data->pekerjaan_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pekerjaan-klien-karyawan',
                'label' => 'Karyawan Swasta',
                'value' => 'Karyawan Swasta',
                'name' => 'pekerjaan_klien',
                'db' => $data->pekerjaan_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pekerjaan-klien-petani',
                'label' => 'Petani/Nelayan',
                'value' => 'Petani/Nelayan',
                'name' => 'pekerjaan_klien',
                'db' => $data->pekerjaan_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pekerjaan-klien-supir',
                'label' => 'Supir',
                'value' => 'Supir',
                'name' => 'pekerjaan_klien',
                'db' => $data->pekerjaan_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pekerjaan-klien-buruh',
                'label' => 'Buruh',
                'value' => 'Buruh',
                'name' => 'pekerjaan_klien',
                'db' => $data->pekerjaan_klien ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pekerjaan-klien-lainnya',
                'label' => 'Lainnya',
                'value' => 'Lainnya',
                'name' => 'pekerjaan_klien',
                'db' => $data->pekerjaan_klien ?? '',
            ])
        </div>
        @include('components.form.input-text', [
            'db' => $data->pekerjaan_suami ?? '',
            'id' => 'pekerjaan_suami',
            'label' => '5. Pekerjaan Suami',
            'placeholder' => 'Pekerjaan Suami',
        ])
    </div>
</div>

@push('script')
    <script>
        $(document).ready(function() {
            // Toggle input for "Menikah Ke" (Klien)
            $('input[name="status_nikah_klien"]').on('change', function() {
                if ($(this).val() === 'Menikah Ke') {
                    $('#status-nikah-klien-ke-wrapper-text').removeClass('d-none').find('input').prop(
                        'disabled',
                        false);
                } else {
                    $('#status-nikah-klien-ke-wrapper-text').addClass('d-none').find('input').prop(
                        'disabled',
                        true);
                }
            });

            // Trigger change event for default selection
            $('input[name="status_nikah_klien"]:checked').trigger('change');

            $('input[name="pekerjaan_klien"]').on('change', function() {
                if ($(this).val() === 'Lainnya') {
                    $('#pekerjaan-klien-lainnya-wrapper-text').removeClass('d-none').find('input').prop(
                        'disabled',
                        false);
                } else {
                    $('#pekerjaan-klien-lainnya-wrapper-text').addClass('d-none').find('input').prop(
                        'disabled',
                        true);
                }
            });

            $('input[name="pekerjaan_klien"]:checked').trigger('change');

            $('input[name="status_nikah_suami"]').on('change', function() {
                if ($(this).val() === 'Menikah Ke') {
                    $('#status-nikah-suami-ke-wrapper').removeClass('d-none').find('input').prop('disabled',
                        false);
                } else {
                    $('#status-nikah-suami-ke-wrapper').addClass('d-none').find('input').prop('disabled',
                        true);
                }
            });

            $('input[name="status_nikah_suami"]:checked').trigger('change');
        });
    </script>
@endpush
