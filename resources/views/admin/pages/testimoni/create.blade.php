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
                    action="{{ $action == 'create' ? route('admin.testimoni.store') : route('admin.testimoni.update', $testimoni->id) }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @if ($action != 'create')
                        @method('PUT')
                    @endif
                    @include('components.form.input-text', [
                        'id' => 'name',
                        'label' => 'Nama Lengkap',
                        'placeholder' => 'Masukkan Nama Lengkap',
                        'db' => $testimoni->name ?? '',
                    ])
                    @include('components.form.input-date-time', [
                        'id' => 'testimonial_date',
                        'label' => 'Tanggal Testimoni',
                        'db' => $testimoni->testimonial_date ?? '',
                        'placeholder' => 'Masukkan Tanggal',
                    ])
                    @include('components.form.input-file', [
                        'helperText' => 'Upload Foto',
                        'label' => 'Foto',
                        'name' => 'img_path',
                        'db' => $testimoni->img_path ?? '',
                    ])
                    @include('components.form.input-text-area', [
                        'id' => 'content',
                        'label' => 'Testimoni',
                        'db' => $testimoni->content ?? '',
                    ])
                    @include('admin.components.button.btn-submit')
                </form>
            </div>
        </div>
    </div>
@endsection
