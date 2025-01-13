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
                        'route' => route('admin.artikel.index'),
                    ])
                </div><!--//table-utilities-->
            </div><!--//col-auto-->
            <div class="col-auto">
                @include('admin.components.button.btn-add-data', [
                    'route' => route('admin.artikel.create'),
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
                                    <nobr>Thumbnails</nobr>
                                </th>
                                <th class="cell">
                                    <nobr>Nama Penulis</nobr>
                                </th>
                                <th class="cell">
                                    <nobr>Judul</nobr>
                                </th>
                                <th class="cell">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($articles as $key => $article)
                                <tr>
                                    <td class="cell">{{ $loop->iteration }}</td>
                                    <td class="cell">
                                        <nobr>
                                            <img src="{{ URL::asset('storage/' . $article->thumbnails) }}"
                                                style="height: 5em" alt="">
                                        </nobr>
                                    </td>
                                    <td class="cell">
                                        <nobr>{{ $article->name }}</nobr>
                                    </td>
                                    <td class="cell">
                                        <nobr>{{ $article->title }}</nobr>
                                    </td>
                                    <td class="cell">
                                        <div class="d-flex gap-1">
                                            <a class="btn-sm app-btn-warning"
                                                href="{{ route('admin.artikel.edit', $article->slug) }}">Edit</a>
                                            <form id="deleteForm"
                                                action="{{ route('admin.artikel.destroy', $article->slug) }}"
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

        {{ $articles->links('admin.components.paginate-table') }}


    </div><!--//container-fluid-->
@endsection
