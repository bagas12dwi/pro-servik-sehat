<h4 class="card-title text-primary mb-3">Riwayat Kesehatan Reproduksi</h4>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        @include('components.form.input-number', [
            'db' => $data->kesehatan->usia_haid ?? '',
            'id' => 'usia_haid',
            'placeholder' => 'Masukkan Usia Pertama Haid',
            'label' => '1. Usia Pertama Haid',
            'satuan' => 'th',
        ])
        @include('components.form.input-number', [
            'db' => $data->kesehatan->usia_kawin ?? '',
            'id' => 'usia_kawin',
            'placeholder' => 'Masukkan Usia Pertama Kawin',
            'label' => '2. Usia Pertama Kawin',
            'satuan' => 'th',
        ])
        @include('components.form.input-number', [
            'db' => $data->kesehatan->usia_hamil ?? '',
            'id' => 'usia_hamil',
            'placeholder' => 'Masukkan Usia Pertama Hamil',
            'label' => '3. Usia Pertama Hamil',
            'satuan' => 'th',
        ])
        @include('components.form.label', [
            'id' => 'konsumsi-alkohol',
            'label' => '4. Konsumsi Alkohol > 1x/hari',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'alkohol-ya',
                'label' => 'Ya',
                'value' => 1,
                'name' => 'konsumsi_alkohol',
                'db' => $data->kesehatan->konsumsi_alkohol ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'alkohol-tidak',
                'label' => 'Tidak',
                'value' => 0,
                'name' => 'konsumsi_alkohol',
                'db' => $data->kesehatan->konsumsi_alkohol ?? '',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'hpht',
            'label' => '5. Masih Haid? kapan HPHT (Hari Pertama Haid yang Terakhir)',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'hpht-ya',
                'label' => 'Ya',
                'value' => 1,
                'name' => 'hpht',
                'db' => $data->kesehatan->hpht ?? '',
                'dbDesc' => $data->kesehatan->hpht_desc ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'hpht-tidak',
                'label' => 'Sudah Menopause Umur',
                'value' => 0,
                'name' => 'hpht',
                'db' => $data->kesehatan->hpht ?? '',
                'satuan' => 'th',
                'dbDesc' => $data->kesehatan->hpht_desc ?? '',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'melahirkan',
            'label' => '6. Jumlah Melahirkan',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-checkbox', [
                'id' => 'normal',
                'label' => 'Normal',
                'name' => 'melahirkan_normal',
                'value' => 0,
                'db' => $data->kesehatan->melahirkan_normal ?? '',
                'wrapperType' => '-wrapper',
                'satuan' => 'X',
                'dbDesc' => $data->kesehatan->melahirkan_normal_desc ?? '',
            ])
            @include('components.form.input-checkbox', [
                'id' => 'caesar',
                'label' => 'Caesar',
                'name' => 'melahirkan_caesar',
                'value' => 0,
                'db' => $data->kesehatan->melahirkan_caesar ?? '',
                'wrapperType' => '-wrapper',
                'satuan' => 'X',
                'dbDesc' => $data->kesehatan->melahirkan_caesar_desc ?? '',
            ])
            @include('components.form.input-checkbox', [
                'id' => 'keguguran',
                'label' => 'Keguguran',
                'name' => 'keguguran',
                'value' => 0,
                'db' => $data->kesehatan->keguguran ?? '',
                'wrapperType' => '-wrapper',
                'satuan' => 'X',
                'dbDesc' => $data->kesehatan->keguguran_desc ?? '',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'menyusui',
            'label' => '7. Pernah Menyusui',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'menyusui-ya',
                'label' => 'Ya',
                'value' => 1,
                'name' => 'menyusui',
                'db' => $data->kesehatan->menyusui ?? '',
                'satuan' => 'bln',
                'dbDesc' => $data->kesehatan->menyusui_desc ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'menyusui-tidak',
                'label' => 'Tidak',
                'value' => 0,
                'name' => 'menyusui',
                'db' => $data->kesehatan->menyusui ?? '',
            ])
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        @include('components.form.label', [
            'id' => 'kb-lama',
            'label' => '8. KB Lama/Dulu',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-checkbox', [
                'id' => 'kb-lama-tidak-pernah',
                'label' => 'Tidak Pernah',
                'name' => 'kb_lama_tidak_pernah',
                'value' => 'Tidak Pernah',
                'db' => $data->kesehatan->kb_lama_tidak_pernah ?? '',
                'wrapperType' => '',
            ])
            @include('components.form.input-checkbox', [
                'id' => 'kb-lama-pil',
                'label' => 'Pil',
                'name' => 'kb_lama_pil',
                'value' => 'Pil',
                'db' => $data->kesehatan->kb_lama_pil ?? '',
                'wrapperType' => '-wrapper',
                'satuan' => 'th',
                'dbDesc' => $data->kesehatan->kb_lama_pil_desc ?? '',
            ])
            @include('components.form.input-checkbox', [
                'id' => 'kb-lama-suntik',
                'label' => 'Suntik',
                'name' => 'kb_lama_suntik',
                'value' => 'Suntik',
                'db' => $data->kesehatan->kb_lama_suntik ?? '',
                'wrapperType' => '-wrapper',
                'satuan' => 'th',
                'dbDesc' => $data->kesehatan->kb_lama_suntik_desc ?? '',
            ])
            @include('components.form.input-checkbox', [
                'id' => 'kb-lama-spiral',
                'label' => 'Spiral',
                'name' => 'kb_lama_spiral',
                'value' => 'Spiral',
                'db' => $data->kesehatan->kb_lama_spiral ?? '',
                'wrapperType' => '',
            ])
            @include('components.form.input-checkbox', [
                'id' => 'kb-lama-susuk',
                'label' => 'Susuk',
                'name' => 'kb_lama_susuk',
                'value' => 'Susuk',
                'db' => $data->kesehatan->kb_lama_susuk ?? '',
                'wrapperType' => '',
            ])
            @include('components.form.input-checkbox', [
                'id' => 'kb-lama-kondom',
                'label' => 'Kondom',
                'name' => 'kb_lama_kondom',
                'value' => 'Kondom',
                'db' => $data->kesehatan->kb_lama_kondom ?? '',
                'wrapperType' => '',
            ])
            @include('components.form.input-checkbox', [
                'id' => 'kb-lama-lainnya',
                'label' => 'Lainnya',
                'name' => 'kb_lama_lainnya',
                'value' => 'Lainnya',
                'db' => $data->kesehatan->kb_lama_lainnya ?? '',
                'wrapperType' => '-wrapper-text',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'kb-sekarang',
            'label' => '9. KB Sekarang',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-checkbox', [
                'id' => 'kb-sekarang-tidak-kb',
                'label' => 'Tidak KB',
                'name' => 'kb_sekarang_tidak_kb',
                'value' => 'Tidak KB',
                'db' => $data->kesehatan->kb_sekarang_tidak_kb ?? '',
                'wrapperType' => '',
            ])
            @include('components.form.input-checkbox', [
                'id' => 'kb-sekarang-pil',
                'label' => 'Pil',
                'name' => 'kb_sekarang_pil',
                'value' => 'Pil',
                'db' => $data->kesehatan->kb_sekarang_pil ?? '',
                'wrapperType' => '-wrapper',
                'satuan' => 'th',
                'dbDesc' => $data->kesehatan->kb_sekarang_pil_desc ?? '',
            ])
            @include('components.form.input-checkbox', [
                'id' => 'kb-sekarang-suntik',
                'label' => 'Suntik',
                'name' => 'kb_sekarang_suntik',
                'value' => 'Suntik',
                'db' => $data->kesehatan->kb_sekarang_suntik ?? '',
                'wrapperType' => '-wrapper',
                'satuan' => 'th',
                'dbDesc' => $data->kesehatan->kb_sekarang_suntik_desc ?? '',
            ])
            @include('components.form.input-checkbox', [
                'id' => 'kb-sekarang-spiral',
                'label' => 'Spiral',
                'name' => 'kb_sekarang_spiral',
                'value' => 'Spiral',
                'db' => $data->kesehatan->kb_sekarang_spiral ?? '',
                'wrapperType' => '',
            ])
            @include('components.form.input-checkbox', [
                'id' => 'kb-sekarang-susuk',
                'label' => 'Susuk',
                'name' => 'kb_sekarang_susuk',
                'value' => 'Susuk',
                'db' => $data->kesehatan->kb_sekarang_susuk ?? '',
                'wrapperType' => '',
            ])
            @include('components.form.input-checkbox', [
                'id' => 'kb-sekarang-kondom',
                'label' => 'Kondom',
                'name' => 'kb_sekarang_kondom',
                'value' => 'Kondom',
                'db' => $data->kesehatan->kb_sekarang_kondom ?? '',
                'wrapperType' => '',
            ])
            @include('components.form.input-checkbox', [
                'id' => 'kb-sekarang-lainnya',
                'label' => 'Lainnya',
                'name' => 'kb_sekarang_lainnya',
                'value' => 'Lainnya',
                'db' => $data->kesehatan->kb_sekarang_lainnya ?? '',
                'wrapperType' => '-wrapper-text',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'pap-smear',
            'label' => '10. Pernah Pap Smear',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => ' pap-smear-ya',
                'label' => 'Ya',
                'value' => 1,
                'name' => 'pap_smear',
                'db' => $data->kesehatan->pap_smear ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'pap-smear-tidak',
                'label' => 'Tidak',
                'value' => 0,
                'name' => 'pap_smear',
                'db' => $data->kesehatan->pap_smear ?? '',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'test-iva',
            'label' => '11. Pernah Test IVA',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => ' test-iva-ya',
                'label' => 'Ya',
                'value' => 1,
                'name' => 'test_iva',
                'db' => $data->kesehatan->test_iva ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'test-iva-tidak',
                'label' => 'Tidak',
                'value' => 0,
                'name' => 'test_iva',
                'db' => $data->kesehatan->test_iva ?? '',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'merokok',
            'label' => '12. Merokok',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'merokok-ya',
                'label' => 'Aktif btg/hr',
                'value' => 1,
                'name' => 'merokok',
                'db' => $data->kesehatan->merokok ?? '',
                'satuan' => 'btg/hr',
                'dbDesc' => $data->kesehatan->merokok_desc ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'merokok-pasif',
                'label' => 'Pasif',
                'value' => 2,
                'name' => 'merokok',
                'db' => $data->kesehatan->merokok ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'merokok-tidak',
                'label' => 'Tidak',
                'value' => 0,
                'name' => 'merokok',
                'db' => $data->kesehatan->merokok ?? '',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'aktivitas',
            'label' => '13. Kurang Aktifitas Fisik (30 menit/hr)',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'aktivitas-ya',
                'label' => 'Ya',
                'value' => 1,
                'name' => 'aktivitas',
                'db' => $data->kesehatan->aktivitas ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'aktivitas-tidak',
                'label' => 'Tidak',
                'value' => 0,
                'name' => 'aktivitas',
                'db' => $data->kesehatan->aktivitas ?? '',
            ])
        </div>
        @include('components.form.label', [
            'id' => 'konsumsi',
            'label' => '14. Kurang Konsumsi buah/sayur (5 porsi/hari)',
        ])
        <div class="ms-3 d-flex gap-2 flex-wrap">
            @include('components.form.input-radio', [
                'id' => 'konsumsi-ya',
                'label' => 'Ya',
                'value' => 1,
                'name' => 'konsumsi',
                'db' => $data->kesehatan->konsumsi ?? '',
            ])
            @include('components.form.input-radio', [
                'id' => 'konsumsi-tidak',
                'label' => 'Tidak',
                'value' => 0,
                'name' => 'konsumsi',
                'db' => $data->kesehatan->konsumsi ?? '',
            ])
        </div>
    </div>
</div>