@extends('layouts.admin.dashboard')

@section('isi')
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
                            {{-- <th style="width: 120px;">Status</th> --}}
                        </tr>
                    </thead><!-- end thead -->
                    <tbody>
                        @foreach ($trx as $key)
                            <tr>
                                
                                    {{-- <td><h6 class="mb-0">{{ $key->trx_no }}</h6></td>
                                    <td>{{ $key->nama_pelanggan }}</td>
                                    <td>{{ $key->alamat }}</td>
                                    <td>{{ $key->grandtotal }}</td>
                                    <td>{{ $key->updated_at }}</td> --}}
                                   <td>testo</td>
                                    
                            </tr>
                        @endforeach
                            <!-- end -->
                        
                    </tbody><!-- end tbody -->
                </table> <!-- end table -->
            </div>
        </div><!-- end card -->
    </div><!-- end card -->
</div>
@endsection