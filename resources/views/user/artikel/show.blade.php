@extends('layout.layout')

@section('konten')
    <style>
        .author-dot::before {
            content: "•";
            /* Unicode character for the bullet point */
            color: black;
            /* Change to any color you prefer */
            margin-right: 5px;
            /* Space between the dot and the text */
        }
    </style>
    @include('components.article-hero')
    <div class="container">
        @include('components.alert.alert')
        <div class="card">
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="btn btn-primary mb-3">
                    <i class="fa-solid fa-arrow-left"></i> Kembali
                </a>
                <h4 class="card-title">
                    {{ $article->title }}
                </h4>
                <p class="fst-italic text-muted">
                    Ditulis Oleh {{ $article->name }} <span class="author-dot"></span>
                    {{ $article->created_at->diffForHumans() }}
                </p>
                <p>
                    {!! $article->content !!}
                </p>
            </div>
        </div>
    </div>
@endsection
