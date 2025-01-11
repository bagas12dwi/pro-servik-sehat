<tr>
    <td colspan="4" style="border-top: 2px solid #000">
        <label style="font-weight: bold">
            VI. PEMERIKSAAN GINEKOLOGI DAN IVA
        </label>
        <label>
            - Gambarkan / Foto SSK dan ketahanan yang ada seperti: Polip,
            Kondiloma, Ovula Nabothi, dll
        </label>
    </td>
</tr>
<tr>
    <td colspan="2">
        <label>Kelainan Vulva : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->ginekologiExamination->vulva === 'Tidak' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->ginekologiExamination->vulva === 'Ya' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ya
            @if ($booking->ginekologiExamination->vulva_desc === '0' || !$booking->ginekologiExamination->vulva_desc)
                ........
            @else
                {{ $booking->ginekologiExamination->vulva_desc }}
            @endif
        </label>

        <br>

        <label>Kelainan Vagina : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->ginekologiExamination->vagina === 'Tidak' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->ginekologiExamination->vagina === 'Ya' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ya
            @if ($booking->ginekologiExamination->vagina_desc === '0' || !$booking->ginekologiExamination->vagina_desc)
                ........
            @else
                {{ $booking->ginekologiExamination->vagina_desc }}
            @endif
        </label>

        <br>

        <label>Curiga Kanker Serviks : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->ginekologiExamination->serviks === 'Tidak' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->ginekologiExamination->serviks === 'Ya, Rujuk ke Rumah Sakit' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ya, Rujuk ke Rumah Sakit</label>

        <br>

        <label>Pemeriksaan SSK : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->ginekologiExamination->ssk === 'Tampak' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tampak</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->ginekologiExamination->ssk === 'Tidak Tampak, (anjuran Pap Smear)' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak Tampak, (anjuran Pap Smear)</label>

        <br>

        <label>Pengambilan Pap Smear : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->ginekologiExamination->pap_smear === 'Ya' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ya</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->ginekologiExamination->pap_smear === 'Tidak' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak</label>

        <br>

        <table style="width: 100%">
            <tr>
                <td style="vertical-align: top;">
                    Hasil
                </td>
                <td style="vertical-align: top;"> :
                    <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                        {{ $booking->ginekologiExamination->hasil === 'IVA Negatif/Normal, Anjuran Periksa berkala 1-2-3-4-5 th.' ? 'checked' : '' }} />
                    <label style="vertical-align: middle; margin: 0; padding: 0;">IVA Negatif/Normal, Anjuran
                        Periksa berkala 1-2-3-4-5 th.</label>
                </td>
            </tr>
            <tr>
                <td colspan="1"></td>
                <td>
                    <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                        {{ $booking->ginekologiExamination->hasil === 'Radang/Servisitis' ? 'checked' : '' }} />
                    <label style="vertical-align: middle; margin: 0; padding: 0;">Radang/Servisitis</label>
                    <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                        {{ $booking->ginekologiExamination->hasil === 'Ringan' ? 'checked' : '' }} />
                    <label style="vertical-align: middle; margin: 0; padding: 0;">Ringan</label>
                    <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                        {{ $booking->ginekologiExamination->hasil === 'Sedang' ? 'checked' : '' }} />
                    <label style="vertical-align: middle; margin: 0; padding: 0;">Sedang</label>
                    <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                        {{ $booking->ginekologiExamination->hasil === 'Berat' ? 'checked' : '' }} />
                    <label style="vertical-align: middle; margin: 0; padding: 0;">Berat</label>
                    <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                        {{ $booking->ginekologiExamination->hasil === 'Rujuk' ? 'checked' : '' }} />
                    <label style="vertical-align: middle; margin: 0; padding: 0;">Rujuk</label>
                    <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                        {{ $booking->ginekologiExamination->hasil === 'Diobati' ? 'checked' : '' }} />
                    <label style="vertical-align: middle; margin: 0; padding: 0;">Diobati
                        @if ($booking->ginekologiExamination->hasil_desc === '0' || !$booking->ginekologiExamination->hasil_desc)
                            ........
                        @else
                            {{ $booking->ginekologiExamination->hasil_desc }}
                        @endif
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="1"></td>
                <td>
                    <table style="width: 100%; vertical-align: top;">
                        <tr>
                            <td style="width: 7em; vertical-align: top;">
                                <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                                    {{ $booking->ginekologiExamination->hasil === 'IVA Positif' ? 'checked' : '' }} />
                                <label style="vertical-align: middle; margin: 0; padding: 0;">IVA
                                    Positif</label>
                            </td>
                            <td style="vertical-align: top;">
                                <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                                    {{ $booking->ginekologiExamination->hasil === 'Anjuran segera Krioterapi' ? 'checked' : '' }} />
                                <label style="vertical-align: middle; margin: 0; padding: 0;">Anjuran segera
                                    Krioterapi</label>
                                <br>
                                <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                                    {{ $booking->ginekologiExamination->hasil === 'IVA Positif Lesi Luas > 75% Rujuk' ? 'checked' : '' }} />
                                <label style="vertical-align: middle; margin: 0; padding: 0;">IVA Positif Lesi
                                    Luas > 75% Rujuk</label>
                                <br>
                                <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                                    {{ $booking->ginekologiExamination->hasil === 'IVA Positif Lesi Luas > 2 mm dari Probe-Krio Tlp. Rujuk' ? 'checked' : '' }} />
                                <label style="vertical-align: middle; margin: 0; padding: 0;">IVA Positif Lesi
                                    Luas > 2 mm dari Probe-Krio Tlp. Rujuk</label>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>

        <br>

        <label>Diduga IMS : </label>
        <label>{{ $booking->ginekologiExamination->ims }}</label>
        <br>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->ginekologiExamination->rujuk === 'Rujuk' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Rujuk</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->ginekologiExamination->rujuk === 'Diobati' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Diobati
            @if ($booking->ginekologiExamination->rujuk_desc === '0' || !$booking->ginekologiExamination->rujuk_desc)
                ........
            @else
                {{ $booking->ginekologiExamination->rujuk_desc }}
            @endif
        </label>
        <br>
        <label>Pemeriksaan Bimanual : </label>
        <label>{{ $booking->ginekologiExamination->ims }}</label>
        <br>
    </td>
    <td colspan="2" style="vertical-align: top;">
        <img src="{{ public_path('storage/' . $booking->ginekologiExamination->gambar_ssk) }}" style="width: 20em;"
            alt="">
    </td>
</tr>
<tr>
    <td colspan="4">
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
