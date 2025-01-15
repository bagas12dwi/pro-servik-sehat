<tr>
    <td colspan="4">
        <label style="font-weight: bold">VII. PEMERIKSAAN PAYUDARA </label>
        <label>- Gambarkan tanda
            <div class="circle"></div> Keras
            <div class="circle-border"></div> Kenyal
            <div class="triangle-border"></div> Bergerak
            <div class="square-border"></div> Tidak Bergerak Pada gambar payudara
        </label>
    </td>
</tr>
<tr>
    <td colspan="1" style="vertical-align: top">
        <label>Kulit : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->kulit_kanan === 'Normal' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Normal</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->kulit_kanan === 'Abnormal' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Abnormal</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->kulit_kanan === 'Kulit Jeruk' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Kulit Jeruk</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->kulit_kanan === 'Luka Basah' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Luka Basah</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->kulit_kanan === 'Penarikan Kulit' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Penarikan Kulit</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->kulit_kanan === 'Lainnya' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Lainnya
            @if ($booking->breastExamination->kulit_kanan_desc === '0' || !$booking->breastExamination->kulit_kanan_desc)
            @else
                {{ $booking->breastExamination->kulit_kanan_desc }}
            @endif
        </label>

        <br>

        <label>Aerola : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->aerola_kanan === 'Normal' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Normal</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->aerola_kanan === 'Abnormal' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Abnormal</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->aerola_kanan === 'Retraksi' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Retraksi</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->aerola_kanan === 'Luka Basah' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Luka Basah</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->aerola_kanan === 'Cairan abnormal dari puting' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Cairan abnormal dari puting</label>

        <br>

        <label>Ada Benjolan/Kelainan : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->benjolan_kanan === 'Tidak' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->benjolan_kanan === 'Ada' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ada,
            Ukuran :
            @if ($booking->breastExamination->benjolan_kanan_desc === '0' || !$booking->breastExamination->benjolan_kanan_desc)
                ..X..
            @else
                {{ $booking->breastExamination->benjolan_kanan_desc }}
            @endif
            cm
        </label>
        <br>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->melekat_kanan === 'Melekat' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Melekat</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->melekat_kanan === 'Tidak Melekat' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak Melekat</label>
    </td>
    <td colspan="1" style="width: 10rem; vertical-align: top; text-align: left;">
        <img src="{{ public_path('storage/' . $booking->breastExamination->gambar_payudara_kanan) }}"
            style="width: 10em;" alt="">
    </td>
    <td colspan="1" style="width: 10rem; vertical-align: top; text-align: left;">
        <img src="{{ public_path('storage/' . $booking->breastExamination->gambar_payudara_kiri) }}"
            style="width: 10em;" alt="">
    </td>
    <td colspan="1">
        <label>Kulit : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->kulit_kiri === 'Normal' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Normal</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->kulit_kiri === 'Abnormal' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Abnormal</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->kulit_kiri === 'Kulit Jeruk' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Kulit Jeruk</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->kulit_kiri === 'Luka Basah' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Luka Basah</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->kulit_kiri === 'Penarikan Kulit' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Penarikan Kulit</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->kulit_kiri === 'Lainnya' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Lainnya
            @if ($booking->breastExamination->kulit_kiri_desc === '0' || !$booking->breastExamination->kulit_kiri_desc)
            @else
                {{ $booking->breastExamination->kulit_kiri_desc }}
            @endif
        </label>

        <br>

        <label>Aerola : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->aerola_kiri === 'Normal' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Normal</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->aerola_kiri === 'Abnormal' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Abnormal</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->aerola_kiri === 'Retraksi' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Retraksi</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->aerola_kiri === 'Luka Basah' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Luka Basah</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->aerola_kiri === 'Cairan abnormal dari puting' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Cairan abnormal dari puting</label>

        <br>

        <label>Ada Benjolan/Kelainan : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->benjolan_kiri === 'Tidak' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->benjolan_kiri === 'Ada' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ada,
            Ukuran :
            @if ($booking->breastExamination->benjolan_kiri_desc === '0' || !$booking->breastExamination->benjolan_kiri_desc)
                ..X..
            @else
                {{ $booking->breastExamination->benjolan_kiri_desc }}
            @endif
            cm
        </label>
        <br>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->melekat_kiri === 'Melekat' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Melekat</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->melekat_kiri === 'Tidak Melekat' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak Melekat</label>
    </td>
</tr>
<tr>
    <td colspan="4" style="font-weight: bold; text-decoration: underline;">
        HASIL SADANIS
    </td>
</tr>
<tr>
    <td colspan="4" style="vertical-align: middle">
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->payudara_normal === 'Payudara Normal' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Payudara Normal</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->sadanis === 'Anjuran SADARI per bulan' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Anjuran SADARI per bulan</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->sadanis === 'SADANIS 1 Tahun' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">SADANIS 1 Tahun</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->sadanis === 'Periksa Mammografi/USG Usia > 40/th' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Periksa Mammografi/USG Usia >
            40/th</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->sadanis === 'Ada Benjolan/Kelainan' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ada Benjolan/Kelainan</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->sadanis === 'Rujuk untuk pemeriksaan lanjutan' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Rujuk untuk pemeriksaan lanjutan</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->sadanis === 'Curiga Kanker Payudara' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Curiga Kanker Payudara</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->breastExamination->sadanis === 'HARUS SEGERA Rujuk untuk pemeriksaan lanjutan' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">HARUS SEGERA Rujuk untuk pemeriksaan
            lanjutan</label>
    </td>
</tr>
<tr>
    <td colspan="4" style="border-bottom: 2px solid #000">
        <table style="width: 100%">
            <tr>
                <td>
                    Diperiksa Tgl. {{ date('d/m/Y', strtotime($booking->inspection_date)) }} di
                    {{ $booking->location }}
                </td>
                <td>
                    oleh dr/Bd/Perawat : ..................
                </td>
                <td>
                    Tanda Tangan : ..................
                </td>
            </tr>
        </table>
    </td>

</tr>
