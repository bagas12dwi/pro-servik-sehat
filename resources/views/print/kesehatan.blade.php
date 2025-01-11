<tr>
    <td colspan="4" style="font-weight: bold; border-top: 2px solid #000">
        III. RIWAYAT KESEHATAN REPRODUKSI
    </td>
</tr>
<tr>
    <td colspan="4" style="vertical-align: middle">
        <label>Usia Pertama Haid : </label>
        {{ $booking->kesehatan->usia_haid }} th,
        <label>Usia Pertama Kawin : </label>
        {{ $booking->kesehatan->usia_kawin }} th,
        <label>Usia Pertama Hamil : </label>
        {{ $booking->kesehatan->usia_hamil }} th,
        <label>Konsumsi Alkohol > 1x/hari : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->konsumsi_alkohol === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ya</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->konsumsi_alkohol === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak, </label>

        <label>Masih Haid? kapan HPHT (Hari Pertama Haid yang Terakhir) : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->hpht === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">
            @if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $booking->kesehatan->hpht_desc))
                Ya, Tgl {{ $booking->kesehatan->hpht_desc }}
            @else
                Ya, Tgl ../../....
            @endif
        </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->hpht === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">
            Sudah Menopause Umur
            @if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $booking->kesehatan->hpht_desc))
                ... th
            @else
                {{ $booking->kesehatan->hpht_desc }} th,
            @endif
        </label>

        <label>Jumlah Melahirkan : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->melahirkan_normal === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Normal
            @if ($booking->kesehatan->melahirkan_normal_desc === '0')
                ...
            @else
                {{ $booking->kesehatan->melahirkan_normal_desc }}
            @endif
            X
        </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->melahirkan_caesar === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Caesar
            @if ($booking->kesehatan->melahirkan_caesar_desc === '0')
                ...
            @else
                {{ $booking->kesehatan->melahirkan_caesar_desc }}
            @endif
            X
        </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->keguguran === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Keguguran
            @if ($booking->kesehatan->keguguran_desc === '0')
                ...
            @else
                {{ $booking->kesehatan->keguguran_desc }}
            @endif
            X,
        </label>

        <label>Pernah Menyusui : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->menyusui === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ya, Lama
            @if ($booking->kesehatan->menyusui_desc === '0' || !$booking->kesehatan->menyusui_desc)
                ...
            @else
                {{ $booking->kesehatan->menyusui_desc }}
            @endif
            Bln
        </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->menyusui === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak,
        </label>

        <label>KB Lama/Dulu : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->kb_lama_tidak_pernah === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak Pernah</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->kb_lama_pil === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Pil
            @if ($booking->kesehatan->kb_lama_pil_desc === '0' || !$booking->kesehatan->kb_lama_pil_desc)
                ...
            @else
                {{ $booking->kesehatan->kb_lama_pil_desc }}
            @endif
            th
        </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->kb_lama_suntik === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Suntik
            @if ($booking->kesehatan->kb_lama_suntik_desc === '0' || !$booking->kesehatan->kb_lama_suntik_desc)
                ...
            @else
                {{ $booking->kesehatan->kb_lama_suntik_desc }}
            @endif
            th
        </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->kb_lama_spiral === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Spiral</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->kb_lama_susuk === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Susuk</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->kb_lama_kondom === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Kondom</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->kb_lama_lainnya === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Lainnya
            @if ($booking->kesehatan->kb_lama_lainnya_desc === '0' || !$booking->kesehatan->kb_lama_lainnya_desc)
                ...
            @else
                {{ $booking->kesehatan->kb_lama_lainnya_desc }}
            @endif
        </label>
        <br>

        <label>KB Sekarang : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->kb_lama_tidak_kb === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak KB</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->kb_sekarang_pil === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Pil
            @if ($booking->kesehatan->kb_sekarang_pil_desc === '0' || !$booking->kesehatan->kb_sekarang_pil_desc)
                ...
            @else
                {{ $booking->kesehatan->kb_sekarang_pil_desc }}
            @endif
            th
        </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->kb_sekarang_suntik === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Suntik
            @if ($booking->kesehatan->kb_sekarang_suntik_desc === '0' || !$booking->kesehatan->kb_sekarang_suntik_desc)
                ...
            @else
                {{ $booking->kesehatan->kb_sekarang_suntik_desc }}
            @endif
            th
        </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->kb_sekarang_spiral === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Spiral</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->kb_sekarang_susuk === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Susuk</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->kb_sekarang_kondom === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Kondom</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->kb_sekarang_lainnya === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Lainnya
            @if ($booking->kesehatan->kb_sekarang_lainnya_desc === '0' || !$booking->kesehatan->kb_sekarang_lainnya_desc)
                ...
            @else
                {{ $booking->kesehatan->kb_sekarang_lainnya_desc }}
            @endif
        </label>
        <br>

        <label>Pernah Pap Smear : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->pap_smear === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ya</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->pap_smear === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak, </label>

        <label>Pernah Tes IVA : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->test_iva === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ya</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->test_iva === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak, </label>

        <label>Merokok : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->merokok === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Aktif
            @if ($booking->kesehatan->merokok_desc === '0' || !$booking->kesehatan->merokok_desc)
                ...
            @else
                {{ $booking->kesehatan->merokok_desc }}
            @endif
            btg/hr
        </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->merokok === '2' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Pasif</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->merokok === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak, </label>

        <label>Kurang Aktifitas Fisik (30 menit/hr) : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->aktivitas === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ya</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->aktivitas === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak, </label>

        <label>Kurang Konsumsi buah/sayur (5 porsi/hari) : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->konsumsi === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ya</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->kesehatan->konsumsi === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak, </label>
    </td>
</tr>
