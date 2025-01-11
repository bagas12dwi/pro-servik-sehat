<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <style>
        .checkbox-prop {
            display: flex;
            align-items: center;
        }

        .circle {
            width: 8pt;
            /* Lebar lingkaran */
            height: 8pt;
            /* Tinggi lingkaran */
            background-color: black;
            /* Warna hitam solid */
            border-radius: 50%;
            /* Membuat elemen menjadi lingkaran */
            display: inline-block;
            /* Menjadikan elemen sejajar dengan teks */
            margin-left: 5px;
            /* Jarak antara teks dan lingkaran */
        }

        .circle-border {
            width: 7pt;
            /* Lebar lingkaran */
            height: 7pt;
            border: 1pt solid black;
            border-radius: 50%;
            display: inline-block;
            margin-left: 5px;
            background-color: transparent;
        }

        .square-border {
            width: 7pt;
            height: 7pt;
            border: 1pt solid black;
            display: inline-block;
            margin-left: 5px;
            background-color: transparent;
        }

        .triangle-border {
            width: 0;
            height: 0;
            border-left: 4pt solid transparent;
            border-right: 4pt solid transparent;
            border-bottom: 7pt solid black;
            display: inline-block;
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <table style="width: 100%; border-collapse: collapse;">
        <tbody>
            <tr>
                <!-- First Image -->
                <td style="width: 10rem; vertical-align: top; text-align: left;">
                    <img src="{{ public_path('assets/img/logo_kemenkes.png') }}" style="width: 10em;" alt="">
                </td>

                <!-- Title and Information -->
                <td style="vertical-align: top; text-align: left;">
                    <strong>CATATAN MEDIS DETEKSI DINI KANKER LEHER RAHIM (SERVIKS) DAN KANKER PAYUDARA</strong><br><br>
                </td>

                <!-- Second Image -->
                <td style="width: 4rem; vertical-align: top; text-align: left;">
                    <img src="{{ public_path('assets/img/logo_kanker.jpg') }}" style="width: 4rem;" alt="">
                </td>
                <td
                    style="width: 12rem; vertical-align: middle; text-align: left; border: 1px solid #000; font-size: 10pt;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="text-align: left; font-weight: bold;">No. Periksa:</td>
                            <td style="text-align: left;">90198790123</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; font-weight: bold;">Tanggal Periksa:</td>
                            <td style="text-align: left;">23/09/2024</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; font-weight: bold;">No. Rekam Medis:</td>
                            <td style="text-align: left;">90198790123</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%; border: 1px solid #000; font-size: 9pt">
        @include('print.booking')
        @include('print.identitas')
        @include('print.kesehatan')
        @include('print.keluarga')
        @include('print.keluhan')
        @include('print.persetujuan')
    </table>

    <table style="width: 100%; border: 1px solid #000; font-size: 9pt; page-break-before: always">
        @include('print.pemeriksaan-payudara')
        @include('print.pemeriksaan-ginekologi')
        @include('print.krioterapi')
    </table>


</body>

</html>
