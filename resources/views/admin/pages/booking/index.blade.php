@extends('admin.layouts.default')

@section('content')
    <div class="container-xl">
        @include('components.alert.alert')
        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Daftar {{ $title }}</h1>
            </div>
            <div class="col-auto">
                <div class="page-utilities">
                    @include('admin.components.search', [
                        'route' => route('admin.booking'),
                    ])
                </div><!--//table-utilities-->
            </div><!--//col-auto-->
        </div><!--//row-->

        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
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
                </div><!--//table-responsive-->

            </div><!--//app-card-body-->
        </div><!--//app-card-->

        {{ $bookings->links('admin.components.paginate-table') }}

    </div><!--//container-fluid-->
@endsection
