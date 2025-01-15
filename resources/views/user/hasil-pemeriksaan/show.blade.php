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
                    <p class="fst-italic" style="font-size: 10pt">
                        {{ $updated['0'] ? $updated['0']->updated_at->format('d-m-Y H:i') . ' WIB' : '' }}</p>
                </div>
                <div class="col">
                    <div class="line"></div>
                </div>
                <div class="col">
                    <div class="circle {{ $data->result_form >= 1 ? 'bg-primary' : 'bg-third' }}">2</div>
                    <p>Pengiriman Sampel Ke Laborat</p>
                    <p class="fst-italic" style="font-size: 10pt">
                        {{ $updated['1'] ? $updated['1']->updated_at->format('d-m-Y H:i') . ' WIB' : '' }}</p>
                </div>
                <div class="col">
                    <div class="line"></div>
                </div>
                <div class="col">
                    <div class="circle {{ $data->result_form >= 2 ? 'bg-primary' : 'bg-third' }}">3</div>
                    <p>Analisa Sampel</p>
                    <p class="fst-italic" style="font-size: 10pt">
                        {{ $updated['2'] ? $updated['2']->updated_at->format('d-m-Y H:i') . ' WIB' : '' }}</p>
                </div>
                <div class="col">
                    <div class="line"></div>
                </div>
                <div class="col">
                    <div class="circle {{ $data->result_form >= 3 ? 'bg-primary' : 'bg-third' }}">4
                    </div>
                    <p>Validasi Hasil Sampel</p>
                    <p class="fst-italic" style="font-size: 10pt">
                        {{ $updated['3'] ? $updated['3']->updated_at->format('d-m-Y H:i') . ' WIB' : '' }}</p>
                </div>
                <div class="col">
                    <div class="line"></div>
                </div>
                <div class="col">
                    <div class="circle {{ $data->result_form >= 4 ? 'bg-primary' : 'bg-third' }}">5</div>
                    <p>Informasi Hasil Sampel</p>
                    <p class="fst-italic" style="font-size: 10pt">
                        {{ $updated['4'] ? $updated['4']->updated_at->format('d-m-Y H:i') . ' WIB' : '' }}</p>
                </div>
                <div class="col">
                    <div class="line"></div>
                </div>
                <div class="col">
                    <div class="circle {{ $data->result_form >= 5 ? 'bg-primary' : 'bg-third' }}">5</div>
                    <p>Tindak Lanjut</p>
                    <p class="fst-italic" style="font-size: 10pt">
                        {{ $updated['5'] ? $updated['5']->updated_at->format('d-m-Y H:i') . ' WIB' : '' }}</p>
                </div>
            </div>

        </div>
    </div>
@endsection
