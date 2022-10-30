@extends('layouts.admin.dashboard')
@section('search')
<form action="{{ url('admin/product/'.Auth::user()->StoreID) }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    @csrf
<div class="input-group">
    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
        aria-label="Search" aria-describedby="basic-addon2" name="cari" value="{{ request('cari') }}">
    <div class="input-group-append">
        <button class="btn" style="background-color: #1D5576;" type="submit">
            <i class="fas fa-search fa-sm text-white"></i>
        </button>
    </div>
</div>
</form>
@endsection
@section("button")
<a href="product/create" class="d-none d-sm-inline-block btn btn-sm text-white  shadow-sm" style="background-color: #1D5576;"><i
    class="fas fa-download fa-sm text-white"></i>Tambah</a>
@endsection
@section('isi')
<div class="container">
    

    <table class="table mt-3" cellpadding="10" cellspace="0">
        <thead class="align-self-center text-center">
            <th>Id Product</th>
            <th>Nama Product</th>
            <th>Stok</th>
            <th>Stok In</th>
            <th>Stok Out</th>
            {{-- <th>Stok</th>
            <th>images</th> --}}
            <th colspan="2">Action</th>
        </thead>
        @foreach ($stok as $key) 
        <tbody>
            <tr class="align-self-center" style="border: 1px solid black;">
                <td data-label="Id Product">{{ $key->id_product }}</td>
                <td data-label="Nama Product">{{ $key->nama_product }}</td>
                <td data-label="Stok">{{ $key->stok }}</td>
                <td data-label="Stok In">{{ $key->stok_in }}</td>
                <td data-label="Stok Out">{{ $key->stok_out }}</td>
          
                {{-- <td data-label="images"><img src="/assets/images/img-product/{{ $key->images }}" style="height: 150px; width: 150px;" alt="Product Image"></td> --}}

                <td class="text-center justify-content-center align-self-center d-flex">
                    <a class="btn btn-info" href="{{ route('product.edit',$key->id_product) }}">Ubah</a>
                    <form action="{{ url('admin/product/'.$key->id_product) }}" method="POST" >
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger ms-2">Delete</button>
                    </form>
                    
                </td>
            </tr>
        </tbody>
        @endforeach

    </table>
</div>
    
@endsection