<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Liminate Admin</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="{{ URL::asset('assets/admin/plugins/fontawesome/js/all.min.js') }}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ URL::asset('assets/admin/css/portal.css') }}">

    <style>
        .app-btn-danger {
            background: #fff;
            color: #5d6778;
            border: 1px solid #bcc1cb
        }

        .app-btn-danger:hover {
            color: #dc3545;
            border: 1px solid #dc3545;
            background: #fff
        }

        .app-btn-warning {
            background: #fff;
            color: #5d6778;
            border: 1px solid #bcc1cb
        }

        .app-btn-warning:hover {
            color: #ffc107;
            border: 1px solid #ffc107;
            background: #fff
        }
    </style>

    <link rel="stylesheet" href="{{ URL::asset('assets/css/trix.css') }}">

</head>

<body class="app">
    @include('admin.components.header')

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            @yield('content')
        </div><!--//app-content-->

        @include('admin.components.footer')

    </div><!--//app-wrapper-->


    <!-- Javascript -->
    <script src="{{ URL::asset('assets/admin/plugins/popper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Charts JS -->
    <script src="{{ URL::asset('assets/admin/plugins/chart.js/chart.min.js') }}"></script>
    <script src="{{ URL::asset('assets/admin/js/index-charts.js') }}"></script>

    <!-- Page Specific JS -->
    <script src="{{ URL::asset('assets/admin/js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $(function() {
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();

                // Use `$(this)` to get the clicked delete button, then find the closest form
                var form = $(this).closest('form');

                Swal.fire({
                    title: "Apakah Anda Yakin?",
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Hapus!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // submit the correct form
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Data berhasil dihapus!.",
                            icon: "success"
                        });
                    }
                });
            });
        });
    </script>
    <script src="{{ URL::asset('assets/js/trix.umd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/attachments.js') }}"></script>

    @stack('script')

</body>

</html>
