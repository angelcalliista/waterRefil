@extends('layouts.admin.dashboard')
@section('search')
<form action="{{ route('outlet.index') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
<a href="outlet/create" class="d-none d-sm-inline-block btn btn-sm text-white  shadow-sm" style="background-color: #1D5576;"><i
    class="fas fa-download fa-sm text-white"></i>Tambah</a>
@endsection
@section('isi')
<div class="container">
    

    <table class="table mt-3" cellpadding="10" cellspace="0">
        <thead class="align-self-center text-center">
            <th>Id Outlet</th>
            <th>Nama Outlet</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th colspan="2">Action</th>
        </thead>
        @foreach ($datas as $key) 
        <tbody>
            <tr class="align-self-center" style="border: 1px solid black;">
                <td data-label="Id Outlet">{{ $key->id_outlet }}</td>
                <td data-label="Nama Outlet">{{ $key->nama_outlet }}</td>
                <td data-label="Alamat">{{ $key->alamat }}</td>
                <td data-label="No Telp">{{ $key->no_telp }}</td>
                <td class="text-center justify-content-center align-self-center d-flex">
                    <a class="btn btn-info" href="{{ route('outlet.edit',$key->id) }}">Ubah</a>
                    <form action="{{ url('admin/outlet/'.$key->id) }}" method="POST" >
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