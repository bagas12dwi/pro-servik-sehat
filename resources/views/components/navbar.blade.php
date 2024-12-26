<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-regular fa-circle-user mx-2"></i>{{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i
                                        class="fa-regular fa-user fs-6 me-1"></i>Profile</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i
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
