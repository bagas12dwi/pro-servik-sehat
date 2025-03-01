@extends('admin.layouts.default')

@section('content')
    <div class="container-xl">
        @include('components.alert.alert')
        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Daftar {{ $title }}</h1>
            </div>
            <div class="col-auto">
                <div class="page-utilities d-flex gap-2">
                    @include('admin.components.search', [
                        'route' => route('admin.booking'),
                    ])
                    <a href="{{ route('admin.booking.export') }}" class="btn btn-primary text-white">Export</a>
                </div><!--//table-utilities-->
            </div><!--//col-auto-->
        </div><!--//row-->

        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    @include('admin.pages.booking.table-booking', ['bookings' => $bookings])
                </div><!--//table-responsive-->

            </div><!--//app-card-body-->
        </div><!--//app-card-->

        {{ $bookings->links('admin.components.paginate-table') }}

    </div><!--//container-fluid-->
@endsection
