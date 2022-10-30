@extends('layouts.transaction')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                    <div class="card-outlet">
                        <div class="card">
                            <a href="">
                                <div class="card-body d-flex" >
                                    <h5 class="mt-1 text-center"><b>Merek Asli</b></h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                    <div class="card-outlet">
                        <div class="card">
                            <a href="">
                                <div class="card-body d-flex" >
                                    <img class="outlet-images align-self-center" style="height: 40px; weight: 40px;" src="{{ asset('assets/images/placeholder.png') }}" alt="">
                                    <h5 class="mt-1"><b>Depot Air Kalibata</b></h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-4 d-flex justify-content-center">
                   <img  style="height: 20rem; width: 20rem;" src="{{ asset('assets/images/aqua.jpg') }}" alt="Foto Produk">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                    <div class="card" style="width: 100%; height: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title"><b>AQUA &#40; 19L &#41;</b></h5>
                            <form action="">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"  style="border: none; background-color: rgba(255, 255, 255, 0)">Nama :</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" style="border: none">
                                </div> 
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"  style="border: none; background-color: rgba(255, 255, 255, 0)">Alamat :</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" style="border: none">
                                </div>   
                                <div>
                                    <p class="price"><sup>Rp. 18.000</sup></p> 

                                </div>        
                                <button class="btn btn-pesan" type="submit">Pesan</button>                 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection