@extends('layouts.outlets')
@section('content')
    @can('user')
    <section>
        <div class="container">
            <div class="col-12 mt-5">
                <div class="row ">
                    <div class="col-6 d-flex justify-content-center">
                        <h2 class="title">OUTLET WAToottR REFIL</h2>
                    </div>
                    <div class="col-6">
                        <form method="GET" action="{{ route('outlets.index') }}" class="d-flex">
                            <input name="keyword" id="keyword" value="{{ Request::get('keyword') }}" style="border-color: #000080; border-radius: 20px" class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                            <button type="submit" style="border: none; background-color: white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000080" class="bi bi-search mt-1" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                            
                            {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row mt-4">
                    @foreach ($datas as $key)    
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                            <div class="card-outlet">
                                <a href="{{ url('transaction/'.$key->id_outlet) }}">
                                    <div class="card">
                                        <div class="card-body d-flex" >
                                            <img class="outlet-images align-self-center" style="height: 40px; weight: 40px;" src="{{ asset('assets/images/placeholder.png') }}" alt="">
                                            <h5 class="mt-1"><b>{{ $key->nama_outlet }}</b></h5>
                                        </div>     
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach    
                </div>
            </div>
        </div>
    </section>
    @endcan
@endsection