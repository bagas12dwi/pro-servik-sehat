<tr>
    <td style="font-weight: bold">
        I. IDENTITAS
    </td>
</tr>
<tr>
    <td>Nama Klien</td>
    <td>: Ny. {{ $booking->name }}</td>
    <td>No. eKTP/NIK</td>
    <td>: {{ $booking->nik }}</td>
</tr>
<tr>
    <td>Asal/Suku</td>
    <td>: {{ $booking->origin }}, Agama {{ $booking->religion }}</td>
    <td>Tempat, Tgl.lhr</td>
    <td>: {{ $booking->place_of_birth }}, {{ $booking->birth_date }}</td>
</tr>
<tr>
    <td>Alamat</td>
    <td>: RT/RW. {{ $booking->area_code }} Kel/Desa. {{ $booking->subdistrict }}</td>
    <td>Berat Badan</td>
    <td>: {{ $booking->weight }} kg, Tinggi Bdn: {{ $booking->height }} cm, Gol.Darah:
        {{ $booking->blood_type }}</td>
</tr>
<tr>
    <td>Kecamatan</td>
    <td>: {{ $booking->district }}</td>
    <td>Telepon/HP</td>
    <td>: {{ $booking->phone_number }}</td>
</tr>
<tr>
    <td>Kab./Kota</td>
    <td>: {{ $booking->city }} Prov. {{ $booking->province }}</td>
    <td>Nama Suami</td>
    <td>: {{ $booking->husband_name }}</td>
</tr>
