<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ URL::asset('/assets/img/logo-type.png') }}" alt="" width="200">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimoni">Testimoni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('booking.index') }}">Booking Jadwal</a>
                    </li>
                @endauth
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> --}}

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell" viewBox="0 0 16 16">
                                <path
                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end"
                            style="width: 300px; max-height: 600px; overflow-y: auto;" aria-labelledby="navbarDropdown">
                            @php
                                $dateNow = date('Y-m-d h:i:s');
                                $threeDaysBeforeBooking = date('Y-m-d h:i:s', strtotime($bookingDate . ' -3 days'));
                            @endphp
                            @if (strtotime($dateNow) >= strtotime($threeDaysBeforeBooking) && strtotime($dateNow) < strtotime($bookingDate))
                                <li>
                                    <div class="dropdown-item">
                                        <p style="white-space: normal;">
                                            <strong>Halo !</strong> Kami ingin mengingatkan bahwa Anda memiliki jadwal
                                            booking
                                            pada
                                            <strong>{{ $bookingDate }}</strong>. Kami tunggu kehadirannya! ✨
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endif
                            @forelse ($notif as $item)
                                <li>
                                    <a class="dropdown-item" href="{{ $item->link }}">
                                        <p class="fw-bold mb-1" style="white-space: normal;">{{ $item->title }}</p>
                                        <p style="white-space: normal; margin-bottom: 0;">{{ $item->message }}</p>
                                    </a>
                                </li>

                                <!-- Divider after each item except the last one -->
                                @if (!$loop->last)
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                @endif
                            @empty
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <p class="fw-bold mb-1" style="white-space: normal;">Belum Ada Notifikasi</p>
                                    </a>
                                </li>
                            @endforelse

                            {{-- <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">See all notifications</a></li> --}}

                        </ul>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-regular fa-circle-user mx-2"></i>{{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i
                                        class="fa-regular fa-user fs-6 me-1"></i>Profile</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('booking.list') }}"><i
                                        class="fa-solid fa-book fs-6 me-1"></i>Daftar Booking</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('hasil-pemeriksaan') }}"><i
                                        class="fa-solid fa-list-check fs-6 me-1"></i>Hasil
                                    Pemeriksaan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                @csrf
                            </form>
                            <li><a class="dropdown-item" onclick="document.getElementById('logout-form').submit();"><i
                                        class="fa-solid fa-arrow-right-from-bracket fs-6 me-1"></i>Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-primary">login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
