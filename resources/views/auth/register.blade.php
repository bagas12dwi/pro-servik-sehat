@extends('layout.auth')

@section('konten')
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <form action="{{ route('register') }}" method="POST" class="w-100" style="max-width: 400px;">
            @csrf
            <div class="text-center">
                <img class="mb-4" src="{{URL::asset('/assets/img/logo-gram.png')}}" alt="" width="100" height="100">
                <h1 class="h3 mb-3 fw-normal">Please Register</h1>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Nama Lengkap">
                <label for="floatingInput">Nama Lengkap</label>
            </div>
            <div class="form-floating">
                <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="No. Telepon">
                <label for="phone_number">No. Telepon</label>
                <p id="error-message" class="text-danger" style="display:none;">Inputkan dengan awalan (62xxxxxxxx)</p>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating position-relative">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
                <span class="position-absolute top-50 end-0 translate-middle-y me-3" style="cursor: pointer;">
                    <i class="fa-regular fa-eye-slash" id="togglePassword"></i>
                </span>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            <p class="my-3 text-end text-body-secondary">
                Sudah punya akun? <a href="{{ route('login') }}" class="nav-link d-inline">Masuk</a>
            </p>
        </form>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#phone_number').on('keyup', function() {
                var phoneNumber = $(this).val();

                // Regex for Indonesian phone number (starts with 08 or 62, followed by 8–12 digits)
                var phoneRegex = /^(62)[0-9]{8,12}$/;

                if (phoneRegex.test(phoneNumber)) {
                    // Valid phone number
                    $('#error-message').hide();
                } else {
                    // Invalid phone number
                    $('#error-message').show();
                }
            })
        });

        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordField = document.getElementById('floatingPassword');
            const icon = this;
            const isPassword = passwordField.type === 'password';

            passwordField.type = isPassword ? 'text' : 'password';
            icon.classList.toggle('fa-eye', isPassword);
            icon.classList.toggle('fa-eye-slash', !isPassword);
        });
    </script>
@endpush
