<tr>
    <td colspan="4" style="font-weight: bold; border-top: 2px solid #000">
        II. RIWAYAT IDENTITAS
    </td>
</tr>
<tr>
    <td style="width: 8em">Status Kawin Klien</td>
    <td colspan="3" style="vertical-align: middle">
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->status_nikah_klien === 'Belum/belum hub.sex' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Belum/belum hub.sex</label>

        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->status_nikah_klien === 'Menikah Sekali' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Menikah Sekali</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->status_nikah_klien === 'Menikah Ke' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">
            Menikah Ke-{{ $booking->identityHistory->status_nikah_klien_desc }}
        </label>
    </td>
</tr>
<tr>
    <td>Status Kawin Suami</td>
    <td colspan="3" style="vertical-align: middle">
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->status_nikah_suami === 'Menikah Sekali' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Menikah Sekali</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->status_nikah_suami === 'Menikah Ke' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">
            Menikah Ke-{{ $booking->identityHistory->status_nikah_suami_desc }}
        </label>
    </td>
</tr>
<tr>
    <td>Pendidikan Klien</td>
    <td colspan="3" style="vertical-align: middle">
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pendidikan_klien === 'Tidak Sekolah' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak Sekolah</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pendidikan_klien === 'Tidak Tamat SD' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak Tamat SD</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pendidikan_klien === 'Tamat SD' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tamat SD</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pendidikan_klien === 'Tamat SMP' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tamat SMP</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pendidikan_klien === 'Tamat SMA/Diploma Sarjana' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Tamat SMA/Diploma Sarjana</label>
    </td>
</tr>
<tr>
    <td>Pekerjaan Klien</td>
    <td colspan="3" style="vertical-align: middle">
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pekerjaan_klien === 'TNI/Polri' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">TNI/Polri</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pekerjaan_klien === 'Pensiunan' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Pensiunan</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pekerjaan_klien === 'Guru/Dosen' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Guru/Dosen</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pekerjaan_klien === 'Pedagang/Wirausaha' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Pedagang/Wirausaha</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pekerjaan_klien === 'Ibu Rumah Tangga' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Ibu Rumah Tangga</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pekerjaan_klien === 'Staff Kantor' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Staff Kantor</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pekerjaan_klien === 'Karyawan Swasta' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Karyawan Swasta</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pekerjaan_klien === 'Petani/Nelayan' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Petani/Nelayan</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pekerjaan_klien === 'Supir' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Supir</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pekerjaan_klien === 'Buruh' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Buruh</label>
        <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
            {{ $booking->identityHistory->pekerjaan_klien === 'Lainnya' ? 'checked' : '' }} />
        <label style="vertical-align: middle; margin: 0; padding: 0;">Lainnya
            {{ $booking->identityHistory->pekerjaan_klien_desc }}</label>
    </td>
</tr>
<tr>
    <td>Pekerjaan Suami</td>
    <td colspan="3" style="vertical-align: middle">
        {{ $booking->identityHistory->pekerjaan_suami }}
    </td>
</tr>
