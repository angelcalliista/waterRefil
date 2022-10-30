<?php
$tanggal = date("Y-m-d");
?>
@extends('layouts.admin.dashboard')
@section('search')
<form
class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
<div class="input-group">
    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
        aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
        <button class="btn" style="background-color: #ff9106;" type="button">
            <i class="fas fa-search fa-sm text-white"></i>
        </button>
    </div>
</div>
</form>
@endsection
@section("button")

    
    <form action="{{ url('/admin/transaksi/'.Auth::user()->StoreID) }}" method="GET">
        @csrf
        <br>
        <div class="container" >
            <div class="row" >
                <div class="container-fluid">
                    <div class="form-group row" >
    
                        <div class="col">
                            <input type="date" class="form-control input-sm" name="tgl" id="toDate" value="<?= $tanggal ?>" required >
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary" name="search" title="Search">Cari!..</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
   
  
@endsection
@section('isi')
<div class="container">
    
    {{-- <table class="table mt-3" cellpadding="10" cellspace="0">
        <thead class="align-self-center text-center">
 
            <th>trxno</th>
            <th>jnstrx</th>
            <th>Status</th>
         
        </thead>
        @foreach ($datas as $key) 
        <tbody>
            <tr class="align-self-center" style="border: 1px solid black">
                <td data-label="TrxNo"><p>{{ $key->trxNo }}</p></td>
                <td data-label="jnstrx"><p>{{ $key->jnstrx }}</p></td>
                <td data-label="status"><p>{{ $key->status }}</p></td>
            </tr>
        </tbody>
        @endforeach

    </table> --}}
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    </div>
                </div>

                <h4 class="card-title mb-4">Latest Transactions</h4>
                <div class="table-responsive">
                    <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th>No Transaksi</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Total Tagihan</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                                {{-- <th style="width: 120px;">Status</th> --}}
                            </tr>
                        </thead><!-- end thead -->
                        <tbody>
                            {{-- @foreach ($trx as $key) --}}
                            @foreach ($trx as $key)
                                {{-- <a href="{{ route('transaksi.show', $key->trx_no) }}"> --}}
                                    <tr>
                                        <td><h6 class="mb-0">{{ $key->trx_no }}</h6></td>
                                        <td>{{ $key->nama_pelanggan }}</td>
                                        <td>{{ $key->alamat }}</td>
                                        <td>{{ $key->grandtotal }}</td>
                                        <td>{{ $key->updated_at }}</td>
                                        <td><a href="{{ route('transaksi.show', $key->trx_no) }}">show it baby</a></td>
                                        {{-- <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                        </td> --}}
                                    </tr>
                                {{-- </a>       --}}
                            @endforeach
                                <!-- end -->
                            
                        </tbody><!-- end tbody -->
                    </table> <!-- end table -->
                </div>
            </div><!-- end card -->
        </div><!-- end card -->
    </div>
</div>
@endsection