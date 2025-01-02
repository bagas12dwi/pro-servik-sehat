<h4 class="card-title text-primary my-3">Pemeriksaan GINEKOLOGI dan IVA</h4>
@include('components.form.label', [
    'id' => 'vulva',
    'label' => '1. Kelainan Vulva',
])

<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'vulva-tidak',
        'label' => 'Tidak',
        'value' => 'Tidak',
        'name' => 'vulva',
        'db' => $data->vulva ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'vulva-ya',
        'label' => 'Ya',
        'value' => 'Ya',
        'name' => 'vulva',
        'db' => $data->vulva ?? '',
        'dbDesc' => $data->vulva_desc ?? '',
    ])
</div>
@include('components.form.label', [
    'id' => 'vagina',
    'label' => '2. Kelainan Vagina',
])

<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'vagina-tidak',
        'label' => 'Tidak',
        'value' => 'Tidak',
        'name' => 'vagina',
        'db' => $data->vagina ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'vagina-ya',
        'label' => 'Ya',
        'value' => 'Ya',
        'name' => 'vagina',
        'db' => $data->vagina ?? '',
        'dbDesc' => $data->vagina_desc ?? '',
    ])
</div>
@include('components.form.label', [
    'id' => 'serviks',
    'label' => '3. Curiga Kanker Serviks',
])

<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'serviks-tidak',
        'label' => 'Tidak',
        'value' => 'Tidak',
        'name' => 'serviks',
        'db' => $data->serviks ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'serviks-ya',
        'label' => 'Ya, Rujuk ke Rumah Sakit',
        'value' => 'Ya, Rujuk ke Rumah Sakit',
        'name' => 'serviks',
        'db' => $data->serviks ?? '',
    ])
</div>
@include('components.form.label', [
    'id' => 'ssk',
    'label' => '4. Pemeriksaan SSK',
])

<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'ssk-tidak',
        'label' => 'Tidak Tampak, (anjuran Pap Smear)',
        'value' => 'Tidak Tampak, (anjuran Pap Smear)',
        'name' => 'ssk',
        'db' => $data->ssk ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'ssk-ya',
        'label' => 'Tampak',
        'value' => 'Tampak',
        'name' => 'ssk',
        'db' => $data->ssk ?? '',
    ])
</div>

@include('components.form.label', [
    'id' => 'pap-smear',
    'label' => '5. Pengambilan Pap Smear',
])

<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'pap-smear-tidak',
        'label' => 'Tidak',
        'value' => 'Tidak',
        'name' => 'pap_smear',
        'db' => $data->pap_smear ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'pap-smear-ya',
        'label' => 'Ya',
        'value' => 'Ya',
        'name' => 'pap_smear',
        'db' => $data->pap_smear ?? '',
    ])
</div>
@include('components.form.label', [
    'id' => 'hasil',
    'label' => '5. Hasil',
])

<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'hasil-negatif',
        'label' => 'IVA Negatif/Normal, Anjuran Periksa berkala 1-2-3-4-5 th.',
        'value' => 'IVA Negatif/Normal, Anjuran Periksa berkala 1-2-3-4-5 th.',
        'name' => 'hasil',
        'db' => $data->hasil ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'hasil-radang',
        'label' => 'Radang/Servisitis',
        'value' => 'Radang/Servisitis',
        'name' => 'hasil',
        'db' => $data->hasil ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'hasil-ringan',
        'label' => 'Ringan',
        'value' => 'Ringan',
        'name' => 'hasil',
        'db' => $data->hasil ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'hasil-sedang',
        'label' => 'Sedang',
        'value' => 'Sedang',
        'name' => 'hasil',
        'db' => $data->hasil ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'hasil-berat',
        'label' => 'Berat',
        'value' => 'Berat',
        'name' => 'hasil',
        'db' => $data->hasil ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'hasil-rujuk',
        'label' => 'Rujuk',
        'value' => 'Rujuk',
        'name' => 'hasil',
        'db' => $data->hasil ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'hasil-diobati',
        'label' => 'Diobati',
        'value' => 'Diobati',
        'name' => 'hasil',
        'db' => $data->hasil ?? '',
        'dbDesc' => $data->hasil_desc ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'hasil-positif',
        'label' => 'IVA Positif',
        'value' => 'IVA Positif',
        'name' => 'hasil',
        'db' => $data->hasil ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'hasil-anjuran',
        'label' => 'Anjuran segera Krioterapi',
        'value' => 'Anjuran segera Krioterapi',
        'name' => 'hasil',
        'db' => $data->hasil ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'hasil-lesi-luas-tujuh-lima',
        'label' => 'IVA Positif Lesi Luas > 75% Rujuk',
        'value' => 'IVA Positif Lesi Luas > 75% Rujuk',
        'name' => 'hasil',
        'db' => $data->hasil ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'hasil-luas-dua',
        'label' => 'IVA Positif Lesi Luas > 2 mm dari Probe-Krio Tlp. Rujuk',
        'value' => 'IVA Positif Lesi Luas > 2 mm dari Probe-Krio Tlp. Rujuk',
        'name' => 'hasil',
        'db' => $data->hasil ?? '',
    ])
</div>

@include('components.form.input-text', [
    'id' => 'ims',
    'label' => 'Diduga IMS',
    'name' => 'ims',
    'db' => $data->ims ?? '',
    'placeholder' => '',
])
<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'rujuk-rujuk',
        'label' => 'Rujuk',
        'value' => 'Rujuk',
        'name' => 'rujuk',
        'db' => $data->rujuk ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'rujuk-diobati',
        'label' => 'Diobati',
        'value' => 'Diobati',
        'name' => 'rujuk',
        'db' => $data->rujuk ?? '',
        'dbDesc' => $data->rujuk_desc ?? '',
    ])
</div>

@include('components.form.input-text', [
    'id' => 'bimanual',
    'label' => 'Pemeriksaan Bimanual',
    'name' => 'bimanual',
    'db' => $data->bimanual ?? '',
    'placeholder' => '',
])

@include('components.form.input-file', [
    'name' => 'gambar_ssk',
    'label' => 'Gambar Pemeriksaan SSK',
    'helperText' => 'Ukuran file maksimal 2MB',
])


@push('script')
    <script>
        $(document).ready(function() {
            $('input[name="vulva"]').on('change', function() {
                if ($(this).val() === 'Ya') {
                    $('#vulva-ya-wrapper-text').removeClass('d-none').find('input').prop(
                        'disabled',
                        false);
                } else {
                    $('#vulva-ya-wrapper-text').addClass('d-none').find('input').prop(
                        'disabled',
                        true);
                }
            });
            $('input[name="vulva"]:checked').trigger('change');

            $('input[name="vagina"]').on('change', function() {
                if ($(this).val() === 'Ya') {
                    $('#vagina-ya-wrapper-text').removeClass('d-none').find('input').prop(
                        'disabled',
                        false);
                } else {
                    $('#vagina-ya-wrapper-text').addClass('d-none').find('input').prop(
                        'disabled',
                        true);
                }
            });
            $('input[name="vagina"]:checked').trigger('change');

            $('input[name="hasil"]').on('change', function() {
                if ($(this).val() === 'Diobati') {
                    $('#hasil-diobati-wrapper-text').removeClass('d-none').find('input').prop(
                        'disabled',
                        false);
                } else {
                    $('#hasil-diobati-wrapper-text').addClass('d-none').find('input').prop(
                        'disabled',
                        true);
                }
            });
            $('input[name="hasil"]:checked').trigger('change');

            $('input[name="rujuk"]').on('change', function() {
                if ($(this).val() === 'Diobati') {
                    $('#rujuk-diobati-wrapper-text').removeClass('d-none').find('input').prop(
                        'disabled',
                        false);
                } else {
                    $('#rujuk-diobati-wrapper-text').addClass('d-none').find('input').prop(
                        'disabled',
                        true);
                }
            });
            $('input[name="rujuk"]:checked').trigger('change');

        });
    </script>
@endpush
