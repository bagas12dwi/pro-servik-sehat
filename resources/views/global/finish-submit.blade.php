@extends('layout.auth')

@section('konten')
    <style>
        .success-animation {
            margin: 10px auto;
        }

        .checkmark {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: block;
            stroke-width: 2;
            stroke: #4bb71b;
            stroke-miterlimit: 10;
            box-shadow: inset 0px 0px 0px #4bb71b;
            animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
            position: relative;
            top: 5px;
            right: 5px;
            margin: 0 auto;
        }

        .checkmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 2;
            stroke-miterlimit: 10;
            stroke: #4bb71b;
            fill: #fff;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;

        }

        .checkmark__check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
        }

        @keyframes stroke {
            100% {
                stroke-dashoffset: 0;
            }
        }

        @keyframes scale {

            0%,
            100% {
                transform: none;
            }

            50% {
                transform: scale3d(1.1, 1.1, 1);
            }
        }

        @keyframes fill {
            100% {
                box-shadow: inset 0px 0px 0px 30px #4bb71b;
            }
        }

        svg {
            margin: auto;
            width: 148px;
        }

        .bg-logo {
            opacity: 1;
            animation: 1s bg-animation forwards;
            animation-delay: 0.5s;
        }

        @keyframes bg-animation {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        .logo {
            opacity: 1;
            stroke-dasharray: 180;
            stroke-dashoffset: 180;
            animation: 1s logo-animation forwards;
        }

        @keyframes logo-animation {
            0% {
                opacity: 1;
                stroke-dashoffset: 180;
            }

            100% {
                opacity: 0;
                stroke-dashoffset: 0;
            }
        }

        .circle-stroke {
            opacity: 0;
            stroke-dasharray: 210;
            stroke-dashoffset: 0;
            animation: 1.5s stroke-animation forwards;
            animation-delay: 0.8s;
        }

        @keyframes stroke-animation {
            0% {
                opacity: 0;
                stroke-dashoffset: 210;
            }

            100% {
                opacity: 1;
                stroke-dashoffset: 0;
            }
        }

        .circle-fill {
            opacity: 0;
            animation: 3s fill-animation forwards;
            animation-delay: 1s;
        }

        @keyframes fill-animation {
            0% {
                opacity: 0;
            }

            80% {
                opacity: 1;
            }

            100% {
                opacity: 1;
            }
        }

        .cross {
            opacity: 1;
            stroke-dasharray: 180;
            stroke-dashoffset: 180;
            animation: 2s cross-animation forwards;
            animation-delay: 2s;
        }

        @keyframes cross-animation {
            0% {
                stroke-dashoffset: 180;
            }

            100% {
                stroke-dashoffset: 0;
            }
        }
    </style>
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <div class="w-100 text-center" style="max-width: 400px;">
            @if (session()->has('success'))
                <div class="success-animation">
                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                    </svg>
                </div>
            <h3 class="fw-bold my-2">Berhasil !</h3>
            <p class="mb-3">{{ session('success') }}</p>


            @endif

            @if (session()->has('error'))
                <?xml encoding="utf-8"?>
                <!-- Generator: Adobe Illustrator 24.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 72 72"
                    style="enable-background:new 0 0 72 72;" xml:space="preserve">
                    <style type="text/css">
                        .bg-logo {
                            clip-path: url(#SVGID_2_);
                            fill: none;
                            stroke: #F1F1F1;
                            stroke-width: 8;
                            stroke-linejoin: round;
                            stroke-miterlimit: 10;
                        }

                        .logo {
                            clip-path: url(#SVGID_2_);
                            fill: none;
                            stroke: #8247E5;
                            stroke-width: 8;
                            stroke-linejoin: round;
                            stroke-miterlimit: 10;
                        }

                        .circle-fill {
                            fill: #DE524C;
                        }

                        .circle-stroke {
                            fill: none;
                            stroke: #DE524C;
                            stroke-width: 5;
                            stroke-miterlimit: 10;
                        }

                        .cross {
                            fill: none;
                            stroke: #FFFFFF;
                            stroke-width: 5;
                            stroke-linecap: round;
                            stroke-miterlimit: 10;
                        }
                    </style>
                    <g>
                        <defs>
                            <polygon id="SVGID_1_"
                                points="70.5,70.3 70.5,22.8 50.3,22.8 21.6,39.4 21.7,33.6 50.4,17 50.4,2.2 1.5,2.2 1.5,49.6 21.6,49.6 
			50.3,33 50.3,38.3 21.6,54.9 21.6,70" />
                        </defs>
                        <clipPath id="SVGID_2_">
                            <use xlink:href="#SVGID_1_" style="overflow:visible;" />
                        </clipPath>
                        <path class="bg-logo" d="M35.9,28v-7.5c0-0.6-0.3-1.1-0.8-1.3l-12.7-7.4c-0.5-0.3-1.1-0.3-1.6,0L8.2,19.2c-0.5,0.3-0.8,0.8-0.8,1.3
                      v14.8c0,0.6,0.3,1.1,0.8,1.3L21,44c0.5,0.3,1.1,0.3,1.5,0l27-15.7c0.5-0.3,1.1-0.3,1.6,0l12.6,7.4c0.5,0.3,0.8,0.8,0.8,1.3v14.5
                      c0,0.5-0.3,1.1-0.8,1.3L51,60.3c-0.5,0.3-1.1,0.3-1.6,0l-12.8-7.4c-0.5-0.3-0.8-0.8-0.8-1.3v-7.4" />
                        <path class="logo" d="M35.9,28v-7.5c0-0.6-0.3-1.1-0.8-1.3l-12.7-7.4c-0.5-0.3-1.1-0.3-1.6,0L8.2,19.2c-0.5,0.3-0.8,0.8-0.8,1.3
                      v14.8c0,0.6,0.3,1.1,0.8,1.3L21,44c0.5,0.3,1.1,0.3,1.5,0l27-15.7c0.5-0.3,1.1-0.3,1.6,0l12.6,7.4c0.5,0.3,0.8,0.8,0.8,1.3v14.5
                      c0,0.5-0.3,1.1-0.8,1.3L51,60.3c-0.5,0.3-1.1,0.3-1.6,0l-12.8-7.4c-0.5-0.3-0.8-0.8-0.8-1.3v-7.4" />
                    </g>

                    <g>
                        <circle class="circle-stroke" cx="36" cy="36" r="32" />
                        <circle class="circle-fill" cx="36" cy="36" r="32" />
                    </g>

                    <g>
                        <line class="cross" x1="27.4" y1="44.6" x2="44.6" y2="27.4" />
                        <line class="cross" x1="27.4" y1="27.4" x2="44.6" y2="44.6" />
                    </g>

                </svg>
            <h3 class="fw-bold my-2">Gagal !</h3>
            <p class="mb-3">{{ session('error') }}</p>
            @endif

            <a href="{{ route('home') }}" class="btn btn-primary">Kembali Ke Halaman Utama</a>

        </div>
    </div>
@endsection

@push('script')
    <script>
        var shape = document.querySelector(".st4");
        var shapeLength = shape.getTotalLength();
        console.log(shapeLength);
    </script>
@endpush
