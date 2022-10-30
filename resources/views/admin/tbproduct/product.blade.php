@extends('layouts.admin.dashboard')

@section('search')
<form action="{{ route('product.index') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" 
        placeholder="Search for..."aria-label="Search" aria-describedby="basic-addon2" 
        name="keyword" id="keyword" value="{{ Request::get('keyword') }}">
        <div class="input-group-append">
            <button type="submit" class="btn" style="background-color: #1D5576;" >search</button>
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
            <th>Jenis Produk</th>
            <th>Harga</th>
            <th>Size</th>
            <th>Stok</th>
            <th>images</th>
            <th colspan="2">Action</th>
        </thead>
        @foreach ($datas as $key) 
        <tbody>
            <tr class="align-self-center" style="border: 1px solid black;">
                <td data-label="Id Product">{{ $key->id_product }}</td>
                <td data-label="Nama Product">{{ $key->nama_product }}</td>
                <td data-label="Jenis Product">{{ $key->jns_product }}</td>
                <td data-label="Harga">{{ $key->harga }}</td>
                <td data-label="Size">{{ $key->size }}</td>
                <td data-label="Stok">{{ $key->stok }}</td>
                <td data-label="images"><img src="/assets/images/img-product/{{ $key->images }}" style="height: 150px; width: 150px;" alt="Product Image"></td>

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