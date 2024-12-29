<h4 class="card-title text-primary my-3">Riwayat Kanker Dalam Keluarga</h4>
@include('components.form.label', [
    'id' => 'tumor-jinak',
    'label' => '1. Riwayat Tumor Jinak Payudara',
])
<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'tumor-jinak-ya',
        'label' => 'Ya',
        'value' => 1,
        'name' => 'tumor_jinak',
        'db' => $data->keluarga->tumor_jinak ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'tumor-jinak-tidak',
        'label' => 'Tidak',
        'value' => 0,
        'name' => 'tumor_jinak',
        'db' => $data->keluarga->tumor_jinak ?? '',
    ])
</div>
@include('components.form.label', [
    'id' => 'saudara',
    'label' => '2. Ada Saudara (Hubungan Darah) yang Sakit Kanker',
])
<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'saudara-ya',
        'label' => 'Ya',
        'value' => 1,
        'name' => 'saudara',
        'db' => $data->keluarga->saudara ?? '',
        'dbDesc' => $data->keluarga->saudara_desc ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'saudara-tidak',
        'label' => 'Tidak',
        'value' => 0,
        'name' => 'saudara',
        'db' => $data->keluarga->saudara ?? '',
    ])
</div>
@include('components.form.label', [
    'id' => 'kanker',
    'label' => '4. Kanker Apa',
])
<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'kanker-ya',
        'label' => 'Ya',
        'value' => 1,
        'name' => 'kanker',
        'db' => $data->keluarga->kanker ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'kanker-tidak',
        'label' => 'Tidak Tahu',
        'value' => 0,
        'name' => 'kanker',
        'db' => $data->keluarga->kanker ?? '',
    ])
</div>