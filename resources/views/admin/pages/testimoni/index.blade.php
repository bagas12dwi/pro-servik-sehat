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
                        'route' => route('admin.testimoni.index'),
                    ])
                </div><!--//table-utilities-->
            </div><!--//col-auto-->
            <div class="col-auto">
                @include('admin.components.button.btn-add-data', [
                    'route' => route('admin.testimoni.create'),
                ])
            </div>
        </div><!--//row-->

        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">No.</th>
                                <th class="cell">
                                    <nobr>Foto</nobr>
                                </th>
                                <th class="cell">
                                    <nobr>Nama Lengkap</nobr>
                                </th>
                                <th class="cell">
                                    <nobr>Tanggal Testimoni</nobr>
                                </th>
                                <th class="cell">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($testimonials as $key => $testimoni)
                                <tr>
                                    <td class="cell">{{ $loop->iteration }}</td>
                                    <td class="cell">
                                        <nobr>
                                            <img src="{{ URL::asset('storage/' . $testimoni->img_path) }}"
                                                style="height: 5em" alt="">
                                        </nobr>
                                    </td>
                                    <td class="cell">
                                        <nobr>{{ $testimoni->name }}</nobr>
                                    </td>
                                    <td class="cell">
                                        <nobr>{{ date('d F Y', strtotime($testimoni->testimonial_date)) }}</nobr>
                                    </td>
                                    <td class="cell">
                                        <div class="d-flex gap-1">
                                            <a class="btn-sm app-btn-warning"
                                                href="{{ route('admin.testimoni.edit', $testimoni->id) }}">Edit</a>
                                            <form id="deleteForm"
                                                action="{{ route('admin.testimoni.destroy', $testimoni->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn-sm app-btn-danger" data-confirm-delete="true"
                                                    id="delete">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>

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

        {{ $testimonials->links('admin.components.paginate-table') }}


    </div><!--//container-fluid-->
@endsection
