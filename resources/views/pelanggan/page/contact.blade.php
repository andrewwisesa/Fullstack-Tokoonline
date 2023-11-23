@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4 align-items-center">
        <div class="col-md-6">
            <div class="content-text">
            Wise Shop hadir sebagai destinasi belanja online yang cerdas dan berorientasi pada kebutuhan konsumen modern. Kami menyediakan beragam produk berkualitas tinggi yang tidak hanya memenuhi standar keunggulan, tetapi juga memberikan pengalaman belanja yang bijaksana.
            <br>Visi: 
            <br>Menjadi toko online terpercaya yang menjadi sumber utama untuk produk berkualitas tinggi dan solusi belanja yang cerdas.
            <br>Misi:
            <br>Memberikan akses mudah ke produk berkualitas dengan harga terjangkau.
            <br>Menyediakan pengalaman belanja online yang aman, nyaman, dan transparan.
            <br>Menjangkau kebutuhan pelanggan dengan ragam produk yang inovatif dan bermutu.
            <br>Menjunjung tinggi prinsip kebijaksanaan dalam setiap aspek layanan dan transaksi.
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/company.png') }}" style="width:100%" alt="">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-users fa-2x"></i>
            <p class="m-0 fs-5">+ 300 Pelanggan</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-home fa-2x"> </i>
            <p class="m-0 fs-5"> +500 Seller</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-shirt fa-2x"></i>
            <p class="m-0 fs-5">+ 300 Product</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
    <hr class="mb-5">
    <div class="row  mb-md-5">
        <div class="col-md-5">
            <div class="bg-secondary" style="width: 100%; height:41vh; border-radius:10px;"></div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Kritik dan saran</h4>
                </div>
                <div class="card-body">
                    <p class="p-0 mb-5 text-lg-center">Masukan kritik dan saran anda kepada website kami ini agar kami dapat memberikan
                        apa yang menjadi kebutuhan anda dan kami dapat berkembang lebih baik lagi.
                    </p>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value=""
                                placeholder="Masukan email Anda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pesan" placeholder="Masukan Pesan Anda">
                        </div>
                    </div>
                    <button class="btn btn-danger mt-4 w-100"> Kirim pesan anda</button>
                </div>
            </div>
        </div>
    </div>
@endsection
