<table>
    <tr>
        <td colspan="4" style="font-weight: bold; border-top: 2px solid #000">
            V. KELUHAN
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <label>Benjolan di Payudara/Ketiak : </label>
            <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                {{ $booking->keluhan->benjolan === '1' ? 'checked' : '' }} />
            <label style="vertical-align: middle; margin: 0; padding: 0;">Ya</label>
            <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                {{ $booking->keluhan->benjolan === '0' ? 'checked' : '' }} />
            <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak, </label>
            <br>

            <label>Keluar Cairan dan Puting : </label>
            <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                {{ $booking->keluhan->cairan === '1' ? 'checked' : '' }} />
            <label style="vertical-align: middle; margin: 0; padding: 0;">Ya</label>
            <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                {{ $booking->keluhan->cairan === '0' ? 'checked' : '' }} />
            <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak, </label>
            <br>

            <label>Keluar Banyak Cairan dari Kemaluan/Keputihan : </label>
            <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                {{ $booking->keluhan->keputihan === '1' ? 'checked' : '' }} />
            <label style="vertical-align: middle; margin: 0; padding: 0;">Ya</label>
            <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                {{ $booking->keluhan->keputihan === '0' ? 'checked' : '' }} />
            <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak, </label>
            <br>

            <label>Pendarahan saat/setelah Senggama : </label>
            <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                {{ $booking->keluhan->pendarahan === '1' ? 'checked' : '' }} />
            <label style="vertical-align: middle; margin: 0; padding: 0;">Ya</label>
            <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                {{ $booking->keluhan->pendarahan === '0' ? 'checked' : '' }} />
            <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak, </label>
            <br>

            <label>Pendarahan diluar Masa Haid : </label>
            <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                {{ $booking->keluhan->pendarahan_haid === '1' ? 'checked' : '' }} />
            <label style="vertical-align: middle; margin: 0; padding: 0;">Ya</label>
            <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                {{ $booking->keluhan->pendarahan_haid === '0' ? 'checked' : '' }} />
            <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak, </label>
            <br>

            <label>Sakit/Nyeri di Perut Bagian Bawah/Panggul : </label>
            <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                {{ $booking->keluhan->sakit === '1' ? 'checked' : '' }} />
            <label style="vertical-align: middle; margin: 0; padding: 0;">Ya</label>
            <input type="checkbox" style="vertical-align: middle; margin: 0; padding: 0;"
                {{ $booking->keluhan->sakit === '0' ? 'checked' : '' }} />
            <label style="vertical-align: middle; margin: 0; padding: 0;">Tidak, </label>
            <br>

            <label>Lain - Lain :
                @if (!$booking->keluhan->keluhan)
                    ...
                @else
                    {{ $booking->keluhan->keluhan }}
                @endif
            </label>


        </td>
    </tr>
</table>
</td>
