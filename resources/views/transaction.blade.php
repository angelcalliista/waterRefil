@extends('layouts.transaction')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                {{-- <p>{{ getNamaOutlet() }}</p>
                <p>{{ getIdOutlet() }}</p> --}}
                <div class="col-lg-6 col-md-6 col-sm-12 mt-4" data-aos="fade-right" data-aos-duration="1700">
                    <div class="card-outlet">
                        <div class="card">
                            <a href="">
                                <div class="card-body d-flex" >
                                    <h5 class="mt-1 text-center"><b>{{ getjnsPemesanan() }}</b></h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-4" data-aos="fade-left" data-aos-duration="1700">
                    <div class="card-outlet">
                        <div class="card">
                            <a href="">
                                <div class="card-body d-flex" >
                                    <img class="outlet-images align-self-center" style="height: 40px; weight: 40px;" src="{{ asset('assets/images/placeholder.png') }}" alt="">
                                    <h5 class="mt-1"><b>Outlet Jakarta Timur</b></h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-5 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1700">
                   <img  style="height: 20rem; width: 20rem;" src="{{ asset('assets/images/gallon-2.png') }}" alt="Foto Produk">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-5" data-aos="fade-left" data-aos-duration="1700">
                    <div class="card-menu" style="width: 100%; height: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title mb-4"><b>AQUA &#40; 19L &#41;</b></h5>
                            <form action="" method="POST">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend col-12">
                                        <label for="formGroupExampleInput" class="input-group-text" id="inputGroup-sizing-sm" style="border: none; background-color: rgba(255, 255, 255, 0)">Nama :</label>
                                        <input name="nama_pelanggan" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend col-12">
                                        <label for="formGroupExampleInput" class="input-group-text" id="inputGroup-sizing-sm" style="border: none; background-color: rgb(255, 255, 255, 0)">Alamat Pengiriman :</label>
                                        <input name="alamat" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="col col-xs-6 text-left mt-4 mb-1 d-flex" align="left" style="justify-content: space-between">
                                    <h6 class="price mb-1"><sup>Rp </sup>48.000</h6>
                                    <input class="mb-1" type="range" id="fromPrice" value="1" min="1" max="50"
                                        oninput="document.getElementById('fPrice').innerHTML = this.value" />
                                    <label class="mb-2" id="fPrice"></label>
                                </div>
                                <button class="btn btn-pesan btn-primary align-self-center" style="margin-top: 10px" type="submit"><b>PESAN</b></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
