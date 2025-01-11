<tr>
    <td colspan="4" style="font-weight: bold; border-top: 2px solid #000">
        IV. RIWAYAT KANKER DALAM KELUARGA
    </td>
</tr>
<tr>
    <td colspan="2">
        <label>Riwayat Tumor Jinak Payudara : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->keluarga->tumor_jinak === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ya</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->keluarga->tumor_jinak === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak, </label>
        <br>

        <label>Ada Saudara (Hubungan Darah) yang Sakit Kanker : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->keluarga->saudara === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ya</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->keluarga->saudara === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak, </label>
        <br>
        <label style="vertical-align: middle; margin: 0; padding: 0;">Siapa Yang Sakit,
            @if (!$booking->keluarga->saudara_desc)
                ...
            @else
                {{ $booking->keluarga->saudara_desc }}
            @endif
        </label>
        <br>

        <label>Kanker Apa : </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->keluarga->kanker === '0' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak Tahu </label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->keluarga->kanker === '1' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Kanker</label>
