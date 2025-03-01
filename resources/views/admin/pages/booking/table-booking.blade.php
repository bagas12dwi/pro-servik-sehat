<table class="table app-table-hover mb-0 text-left">
    <thead>
        <tr>
            <th class="cell">No.</th>
            <th class="cell">No. Booking</th>
            <th class="cell">
                <nobr>Nama Pasien</nobr>
            </th>
            <th class="cell">
                <nobr>NIK</nobr>
            </th>
            <th class="cell">
                <nobr>No. Telepon</nobr>
            </th>
            <th class="cell">
                <nobr>Tempat, Tanggal Lahir</nobr>
            </th>
            <th class="cell">
                <nobr>Tanggal Booking</nobr>
            </th>
            <th class="cell">
                <nobr>Alamat Domisili</nobr>
            </th>
            <th class="cell">
                <nobr>RT/RW</nobr>
            </th>
            <th class="cell">
                <nobr>Desa/Kelurahan</nobr>
            </th>
            <th class="cell">
                <nobr>Kecamatan</nobr>
            </th>
            <th class="cell">
                <nobr>Kabupaten/Kota</nobr>
            </th>
            <th class="cell">
                <nobr>Provinsi</nobr>
            </th>
            <th class="cell">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($bookings as $key => $booking)
            <tr>
                <td class="cell">{{ $loop->iteration }}</td>
                <td class="cell">
                    <nobr>{{ $booking->document_no }}</nobr>
                </td>
                <td class="cell">
                    <nobr>{{ $booking->name }}</nobr>
                </td>
                <td class="cell">
                    <nobr>{{ $booking->nik }}</nobr>
                </td>
                <td class="cell">
                    <nobr>{{ $booking->phone_number }}</nobr>
                </td>
                <td class="cell">
                    <nobr>
                        {{ $booking->place_of_birth . ', ' . date('d F Y', strtotime($booking->birth_date)) }}
                    </nobr>
                </td>
                <td class="cell">
                    <nobr>{{ date('d F Y h:i', strtotime($booking->inspection_date)) }}</nobr>
                </td>
                <td class="cell">
                    <nobr>{{ $booking->address }}</nobr>
                </td>
                <td class="cell">
                    <nobr>{{ $booking->area_code }}</nobr>
                </td>
                <td class="cell">
                    <nobr>{{ $booking->subdistrict }}</nobr>
                </td>
                <td class="cell">
                    <nobr>{{ $booking->district }}</nobr>
                </td>
                <td class="cell">
                    <nobr>{{ $booking->city }}</nobr>
                </td>
                <td class="cell">
                    <nobr>{{ $booking->province }}</nobr>
                </td>
                <td class="cell"><a class="btn-sm app-btn-secondary"
                        href="{{ route('admin.booking.show', $booking->id) }}">View</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="14" class="text-center">
                    Belum Ada Data Booking
                </td>
            </tr>
        @endforelse

    </tbody>
</table>
