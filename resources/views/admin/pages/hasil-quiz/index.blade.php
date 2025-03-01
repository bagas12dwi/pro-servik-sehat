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
                        'route' => route('admin.artikel.index'),
                    ])
                    <a href="{{ route('admin.quiz.export') }}" class="btn btn-primary text-white">Export</a>
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
                                <th class="cell">
                                    <nobr>Nama</nobr>
                                </th>
                                <th class="cell">
                                    <nobr>Alamat</nobr>
                                </th>
                                <th class="cell">
                                    <nobr>Jawaban Benar</nobr>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($results as $key => $result)
                                <tr>
                                    <td class="cell">{{ $loop->iteration }}</td>
                                    <td class="cell">
                                        <nobr>{{ $result->nama }}</nobr>
                                    </td>
                                    <td class="cell">
                                        <nobr>{{ $result->alamat }}</nobr>
                                    </td>
                                    <td class="cell">
                                        <nobr>{{ $result->score }}</nobr>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Belum Ada Data {{ $title }}
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div><!--//table-responsive-->

            </div><!--//app-card-body-->
        </div><!--//app-card-->

        {{ $results->links('admin.components.paginate-table') }}


    </div><!--//container-fluid-->
@endsection
