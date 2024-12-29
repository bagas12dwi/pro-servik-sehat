@php
    $dateNow = date('Y-m-d h:i:s');
    $threeDaysBeforeBooking = date('Y-m-d h:i:s', strtotime($bookingDate . ' -3 days'));
@endphp

@if (strtotime($dateNow) >= strtotime($threeDaysBeforeBooking) && strtotime($dateNow) < strtotime($bookingDate))
    <div class="alert alert-success" role="alert">
        <strong>Halo !</strong> Kami ingin mengingatkan bahwa Anda memiliki jadwal booking pada <strong>{{ $bookingDate }}</strong>. Kami tunggu kehadirannya! ✨
    </div>
@endif
