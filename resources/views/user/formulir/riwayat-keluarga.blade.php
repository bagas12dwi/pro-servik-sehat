<h4 class="card-title text-primary mb-3">Riwayat Kanker Dalam Keluarga</h4>
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
        'db' => $data->tumor_jinak ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'tumor-jinak-tidak',
        'label' => 'Tidak',
        'value' => 0,
        'name' => 'tumor_jinak',
        'db' => $data->tumor_jinak ?? '',
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
        'db' => $data->saudara ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'saudara-tidak',
        'label' => 'Tidak',
        'value' => 0,
        'name' => 'saudara',
        'db' => $data->saudara ?? '',
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
        'db' => $data->kanker ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'kanker-tidak',
        'label' => 'Tidak Tahu',
        'value' => 0,
        'name' => 'kanker',
        'db' => $data->kanker ?? '',
    ])
</div>

@push('script')
    <script>
        $(document).ready(function() {

            $('input[name="saudara"]').on('change', function() {
                if ($(this).val() == 1) {
                    $('#saudara-ya-wrapper-text').removeClass('d-none').find('input').prop(
                        'disabled',
                        false);
                } else {
                    $('#saudara-ya-wrapper-text').addClass('d-none').find('input').prop(
                        'disabled',
                        true);
                }
            });
            $('input[name="saudara"]:checked').trigger('change');



        });
    </script>
@endpush
