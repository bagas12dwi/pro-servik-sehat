@extends('admin.layouts.default')

@section('content')
    <div class="container-xl">
        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Tambah {{ $title }}</h1>
            </div>
        </div>

        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body p-3">
                <form
                    action="{{ $action == 'create' ? route('admin.artikel.store') : route('admin.artikel.update', $article->slug) }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @if ($action != 'create')
                        @method('PUT')
                    @endif
                    @include('components.form.input-text', [
                        'id' => 'name',
                        'label' => 'Nama Penulis',
                        'placeholder' => 'Masukkan Nama Penulis',
                        'db' => $article->name ?? '',
                    ])
                    @include('components.form.input-text', [
                        'id' => 'title',
                        'label' => 'Judul Artikel',
                        'placeholder' => 'Masukkan Judul Artikel',
                        'db' => $article->title ?? '',
                    ])
                    @include('components.form.input-file', [
                        'helperText' => 'Upload Thumbnail',
                        'label' => 'Thumbnail',
                        'name' => 'thumbnails',
                        'db' => $article->thumbnails ?? '',
                    ])
                    <input id="x" type="hidden" name="content" value="{{ $article->content ?? '' }}" />
                    <trix-editor input="x" class="trix-content mb-3"></trix-editor>
                    @include('admin.components.button.btn-submit')
                </form>
            </div>
        </div>
    </div>
@endsection
