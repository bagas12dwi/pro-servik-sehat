<h4 class="card-title text-primary my-3">KRIOTERAPI</h4>
@include('components.form.label', [
    'id' => 'kriotip',
    'label' => '1. Menggunakan Probe Krio Tip',
])

<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'kriotip-sedang-1',
        'label' => 'Ecto Servix Sedang',
        'value' => 'Ecto Servix Sedang',
        'name' => 'kriotip',
        'db' => $data->kriotip ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'kriotip-sedang-2',
        'label' => 'Ecto Servix Sedang',
        'value' => 'Ecto Servix Sedang',
        'name' => 'kriotip',
        'db' => $data->kriotip ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'kriotip-besar',
        'label' => 'Ecto Servix Besar',
        'value' => 'Ecto Servix Besar',
        'name' => 'kriotip',
        'db' => $data->kriotip ?? '',
    ])
</div>
@include('components.form.label', [
    'id' => 'antibiotik',
    'label' => '2. Pemberian Antibiotik Profilaksis selama 7 hari',
])

<div class="ms-3 d-flex gap-2 flex-wrap">
    @include('components.form.input-radio', [
        'id' => 'antibiotik-doxycycline',
        'label' => 'Doxycycline 2x100 mg',
        'value' => 'Doxycycline 2x100 mg',
        'name' => 'antibiotik',
        'db' => $data->antibiotik ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'antibiotik-lainnya',
        'label' => 'Lainnya',
        'value' => 'Lainnya',
        'name' => 'antibiotik',
        'db' => $data->antibiotik ?? '',
        'dbDesc' => $data->antibiotik_desc ?? '',
    ])
</div>
@include('components.form.label', [
    'id' => 'kemungkinan',
    'label' => '3. Menjelaskan Kemungkainan keadaan yang dialami setelah krioterapi',
])

<div class="ms-3 d-flex gap-2 flex-wrap mb-3">
    @include('components.form.input-radio', [
        'id' => 'kemungkinan-senggama',
        'label' => 'Tidak senggama 30 hari',
        'value' => 'Tidak senggama 30 hari',
        'name' => 'kemungkinan',
        'db' => $data->kemungkinan ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'kemungkinan-keputihan',
        'label' => 'Keputihan bening +/- 1 Minggu',
        'value' => 'Keputihan bening +/- 1 Minggu',
        'name' => 'kemungkinan',
        'db' => $data->kemungkinan ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'kemungkinan-demam',
        'label' => 'Adanya Demam',
        'value' => 'Adanya Demam',
        'name' => 'kemungkinan',
        'db' => $data->kemungkinan ?? '',
    ])
    @include('components.form.input-radio', [
        'id' => 'kemungkinan-kontrol',
        'label' => 'Dipesan Kontrol',
        'value' => 'Dipesan Kontrol',
        'name' => 'kemungkinan',
        'db' => $data->kemungkinan ?? '',
        'dbDesc' => $data->kemungkinan_desc ?? '',
    ])
</div>

@push('script')
    <script>
        $(document).ready(function() {
            $('input[name="antibiotik"]').on('change', function() {
                if ($(this).val() === 'Lainnya') {
                    $('#antibiotik-lainnya-wrapper-text').removeClass('d-none').find('input').prop(
                        'disabled',
                        false);
                } else {
                    $('#antibiotik-lainnya-wrapper-text').addClass('d-none').find('input').prop(
                        'disabled',
                        true);
                }
            });
            $('input[name="antibiotik"]:checked').trigger('change');

            $('input[name="kemungkinan"]').on('change', function() {
                if ($(this).val() === 'Dipesan Kontrol') {
                    $('#kemungkinan-kontrol-wrapper-date').removeClass('d-none').find('input').prop(
                        'disabled',
                        false);
                } else {
                    $('#kemungkinan-kontrol-wrapper-date').addClass('d-none').find('input').prop(
                        'disabled',
                        true);
                }
            });
            $('input[name="kemungkinan"]:checked').trigger('change');
        });
    </script>
@endpush
