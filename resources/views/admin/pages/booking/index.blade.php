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
                    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                        <div class="col-auto">
                            <form class="table-search-form row gx-1 align-items-center">
                                <div class="col-auto">
                                    <input type="text" id="search-orders" name="searchorders"
                                        class="form-control search-orders" placeholder="Search">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn app-btn-secondary">Search</button>
                                </div>
                            </form>

                        </div><!--//col-->
                        <div class="col-auto">

                            <select class="form-select w-auto">
                                <option selected value="option-1">All</option>
                                <option value="option-2">This week</option>
                                <option value="option-3">This month</option>
                                <option value="option-4">Last 3 months</option>

                            </select>
                        </div>
                        {{-- <div class="col-auto">
                            <a class="btn app-btn-secondary" href="#">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path fill-rule="evenodd"
                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                </svg>
                                Download CSV
                            </a>
                        </div> --}}
                    </div><!--//row-->
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
                            @endforelse

                        </tbody>
                    </table>
                </div><!--//table-responsive-->

            </div><!--//app-card-body-->
        </div><!--//app-card-->

        {{ $bookings->links('admin.components.paginate-table') }}

    </div><!--//container-fluid-->
@endsection
