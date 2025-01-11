<tr>
    <td colspan="4" style="font-weight: bold; border-top: 2px solid #000">
        VI. KRIOTERAPI
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
<tr>
    <td colspan="4">
        <label>Menggunakan Probe Krio Tip : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->krioterapi->kriotip === 'Ecto Servix Sedang' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ecto Servix Sedang</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->krioterapi->kriotip === 'Ecto Servix Sedang' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ecto Servix Sedang</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->krioterapi->kriotip === 'Ecto Servix Besar' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ecto Servix Besar</label>
    </td>
</tr>
<tr>
    <td colspan="4">
        <label>Pemberian Antibiotik Profilaksis selama 7 hari : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->krioterapi->antibiotik === 'Doxycycline 2x100 mg' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Doxycycline 2x100 mg</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->krioterapi->antibiotik === 'Lainnya' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Lainnya
            @if ($booking->krioterapi->antibiotik_desc === '0' || !$booking->krioterapi->antibiotik_desc)
                ........
            @else
                {{ $booking->krioterapi->antibiotik_desc }}
            @endif
        </label>
    </td>
</tr>
<tr>
    <td colspan="4">
        <label>Menjelaskan Kemungkainan keadaan yang dialami setelah krioterapi : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->krioterapi->kemungkinan === 'Tidak senggama 30 hari' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak senggama 30 hari</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->krioterapi->kemungkinan === 'Keputihan bening +/- 1 Minggu' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Keputihan bening +/- 1 Minggu</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->krioterapi->kemungkinan === 'Adanya Demam' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Adanya Demam</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->krioterapi->kemungkinan === 'Dipesan Kontrol' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Dipesan Kontrol
            @if ($booking->krioterapi->kemungkinan_desc === '0' || !$booking->krioterapi->kemungkinan_desc)
                ........
            @else
                {{ date('d F Y', strtotime($booking->krioterapi->kemungkinan_desc)) }}
            @endif
        </label>
    </td>
</tr>
