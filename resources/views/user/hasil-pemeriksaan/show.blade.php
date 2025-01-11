@extends('user.booking.index')

@section('progress')
    <style>
        .circle {
            width: 50px;
            height: 50px;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
        }

        .line {
            width: 100%;
            height: 2px;
            background-color: #696969;
            position: relative;
            top: 25px;
        }
    </style>

    <div class="col-12 col-xl-12">
        <div class="card border-0 p-4">
            <div class="row text-center">
                <div class="col">
                    <div class="circle bg-primary">1</div>
                    <p>Pengambilan Sampel</p>
                </div>
                <div class="col">
                    <div class="line"></div>
                </div>
                <div class="col">
                    <div class="circle {{ $data->result_form >= 1 ? 'bg-primary' : 'bg-third' }}">2</div>
                    <p>Pengiriman Sampel Ke Laborat</p>
                </div>
                <div class="col">
                    <div class="line"></div>
                </div>
                <div class="col">
                    <div class="circle {{ $data->result_form >= 2 ? 'bg-primary' : 'bg-third' }}">3</div>
                    <p>Analisa Sampel</p>
                </div>
                <div class="col">
                    <div class="line"></div>
                </div>
                <div class="col">
                    <div class="circle {{ $data->result_form >= 3 ? 'bg-primary' : 'bg-third' }}">4
                    </div>
                    <p>Validasi Hasil Sampel</p>
                </div>
                <div class="col">
                    <div class="line"></div>
                </div>
                <div class="col">
                    <div class="circle {{ $data->result_form >= 4 ? 'bg-primary' : 'bg-third' }}">5</div>
                    <p>Informasi Hasil Sampel</p>
                </div>
                <div class="col">
                    <div class="line"></div>
                </div>
                <div class="col">
                    <div class="circle {{ $data->result_form >= 5 ? 'bg-primary' : 'bg-third' }}">5</div>
                    <p>Tindak Lanjut</p>
                </div>
            </div>

        </div>
    </div>
@endsection
