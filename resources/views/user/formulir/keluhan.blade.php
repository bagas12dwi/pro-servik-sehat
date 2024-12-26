<h4 class="card-title text-primary mb-3">Keluhan</h4>
@include('components.form.label', [
    'id' => 'benjolan',
    'label' => '1. Benjolan di Payudara/Ketiak',
])
<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'benjolan-ya',
        'label' => 'Ya',
        'value' => 1,
        'name' => 'benjolan',
        'db' => $data->benjolan ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'benjolan-tidak',
        'label' => 'Tidak',
        'value' => 0,
        'name' => 'benjolan',
        'db' => $data->benjolan ?? '',
    ])
</div>
@include('components.form.label', [
    'id' => 'cairan',
    'label' => '2. Keluar Cairan dan Puting',
])
<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'cairan-ya',
        'label' => 'Ya',
        'value' => 1,
        'name' => 'cairan',
        'db' => $data->cairan ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'cairan-tidak',
        'label' => 'Tidak',
        'value' => 0,
        'name' => 'cairan',
        'db' => $data->cairan ?? '',
    ])
</div>
@include('components.form.label', [
    'id' => 'keputihan',
    'label' => '3. Keluar Banyak Cairan dari Kemaluan/Keputihan',
])
<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'keputihan-ya',
        'label' => 'Ya',
        'value' => 1,
        'name' => 'keputihan',
        'db' => $data->keputihan ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'keputihan-tidak',
        'label' => 'Tidak',
        'value' => 0,
        'name' => 'keputihan',
        'db' => $data->keputihan ?? '',
    ])
</div>
@include('components.form.label', [
    'id' => 'pendarahan',
    'label' => '4. Pendarahan saat/setelah Senggama',
])
<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'pendarahan-ya',
        'label' => 'Ya',
        'value' => 1,
        'name' => 'pendarahan',
        'db' => $data->pendarahan ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'pendarahan-tidak',
        'label' => 'Tidak',
        'value' => 0,
        'name' => 'pendarahan',
        'db' => $data->pendarahan ?? '',
    ])
</div>
@include('components.form.label', [
    'id' => 'pendarahan_haid',
    'label' => '5. Pendarahan diluar Masa Haid',
])
<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'pendarahan_haid-ya',
        'label' => 'Ya',
        'value' => 1,
        'name' => 'pendarahan_haid',
        'db' => $data->pendarahan_haid ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'pendarahan_haid-tidak',
        'label' => 'Tidak',
        'value' => 0,
        'name' => 'pendarahan_haid',
        'db' => $data->pendarahan_haid ?? '',
    ])
</div>
@include('components.form.label', [
    'id' => 'sakit',
    'label' => '6. Sakit/Nyeri di Perut Bagian Bawah/Panggul',
])
<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'sakit-ya',
        'label' => 'Ya',
        'value' => 1,
        'name' => 'sakit',
        'db' => $data->sakit ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'sakit-tidak',
        'label' => 'Tidak',
        'value' => 0,
        'name' => 'sakit',
        'db' => $data->sakit ?? '',
    ])
</div>
@include('components.form.input-text-area', [
    'db' => $data->keluhan ?? '',
    'id' => 'keluhan',
    'label' => 'Lain - Lain',
])

@push('script')
    <script>
        $(document).ready(function() {});
    </script>
@endpush
