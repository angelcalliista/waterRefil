@extends('layouts.jns-pemesanan')

@section('content')
{{ clrjnsPemesanan() }}
{{ clrNamaOutlet() }}
{{ clrNoTrx() }}
{{ clrIdOutlet() }}
<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="card pb-5" style="width: 100%;">
                            <div class="card-body">
                                <h2 class="card-title text-center mt-4">PILIH JENIS PESANAN</h2>
                                <div class="col-12">
                                  <div class="row mt-5">
                                      <div class="col-6 d-flex justify-content-center">
                                                <form action="/jns/tambah" method="post">
                                                    @csrf
                                                <div class="card-content">
                                                    <input type="hidden" value="1" name="trx_no">  
                                                    <input type="hidden" value="Air Isi Ulang" name="jenis_product">
                                                    <button type="submit" style="border: none; background-color: white">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-images d-flex justify-content-center mt-2"  style="width: 200px;" src="{{ asset('assets/images/gallon.png') }}" alt="">
                                                                <h2 class="card-title text-center text-white mt-3"><b>AIR ISI <br> ULANG</b></h2>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 d-flex justify-content-center">
                                            <form action="/jns/tambah" method="post">
                                                @csrf
                                                <div class="card-content">
                                                    <input type="hidden" value="1" name="trx_no">  
                                                    <input type="hidden" value="Merk Asli" name="jenis_product">
                                                    <button type="submit" style="border: none; background-color: white">
                                                        <div class="card">
                                                            {{-- <a href="/outlets" style="text-decoration: none"> --}}
                                                                <div class="card-body">
                                                                    <img class="card-images d-flex justify-content-center mt-2" style="width: 200px" src="{{ asset('assets/images/water-drop.png') }}" alt="">
                                                                    <h2 class="card-title mt-5 text-center text-white align-self-end"><b>MEREK ASLI</b></h2>
                                                                </div>
                                                            {{-- </a> --}}
                                                        </div>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6"></div>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection