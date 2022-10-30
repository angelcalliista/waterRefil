@extends('layouts.admin.dashboard-body')

@section('container')
<div class="container mb-5">
    <div class="m-5 text-center"><h2>Tambah Product</h2></div>
<form action="{{ url('admin/product') }}" method="post" enctype="multipart/form-data">
    @csrf
    {{-- <div class="form-group">
        <input type="hidden" class="form-control" id="id" name="id" required>
     </div> --}}
    <div class="form-group">
        <label for="formGroupExampleInput">Id Outlets</label>
        <input type="text" class="form-control" id="id_outlet" name="id_outlet" placeholder="Masukkan Id Outlet" required>
     </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Id Produk</label>
        <input type="text" class="form-control" id="id_product" name="id_product"  placeholder="Masukkan Id Produk " required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" class="form-control" id="name" name="nama_product"  placeholder="Masukkan Nama " required>
    </div>
   
    <select class="form-select mt-4" name="jns_product" aria-label="Default select example">
        <option selected>Jenis Product</option>
        <option value="isi_ulang">Isi Ulang</option>
        <option value="product_asli">Produk Asli</option>
    </select>
    <div class="form-group">
        <label for="formGroupExampleInput">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga"  placeholder="Masukkan Harga " required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Size</label>
        <input type="text" class="form-control" id="size" name="size"  placeholder="Masukkan Size Produk" required>
    </div>
    <div class="form-group mb-2">
        <label for="formGroupExampleInput">Images</label>
        <input type="file" class="form-control" id="images" name="images">
        <img id="preview-image-before-upload" src="" alt="" style="width: 250px">
    </div>

     <button style="background-color: #1D5576;  border: unset" type="submit" class="btn btn-primary mt-4">Tambah</button>
      <button type="reset" class="btn btn-danger mt-4">Reset</button>
</form>
</div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
<script type="text/javascript">
      
$(document).ready(function (e) {
 
   
   $('#images').change(function(){
            
    let reader = new FileReader();
 
    reader.onload = (e) => { 
 
      $('#preview-image-before-upload').attr('src', e.target.result); 
    }
 
    reader.readAsDataURL(this.files[0]); 
   
   });
   
});
 
</script>
@endsection