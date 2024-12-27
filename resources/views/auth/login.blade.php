@extends('layout.auth')

@section('konten')
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <form class="w-100" action="{{ route('login') }}" method="POST" style="max-width: 400px;">
            @csrf
            <div class="text-center">
                <img class="mb-4" src="{{URL::asset('/assets/img/logo-gram.png')}}" alt="" width="100" height="100">
                <h1 class="h3 mb-3 fw-normal">Please log in</h1>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            <p class="my-3 text-end text-body-secondary">
                Belum punya akun? <a href="{{ route('register') }}" class="nav-link d-inline">Daftar</a>
            </p>
        </form>
    </div>
@endsection
