@extends('layouts.admin.dashboard-body')


@section('container')
<div class="container">
    <div class="m-5 text-center"><h2>Tambah Pelanggan</h2></div>
<form action="{{ url('admin/outlet') }}" method="post" enctype="multipart/form-data">
    @csrf
    {{-- <div class="form-group">
        <input type="hidden" class="form-control" id="id" name="id" required>
     </div> --}}
    <div class="form-group">
        <label for="formGroupExampleInput">Id Outlet</label>
        <input type="text" class="form-control" id="id_outlet" name="id_outlet" required>
     </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Nama Outlet</label>
        <input type="text" class="form-control" id="nama_outlet" name="nama_outlet" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">No Telepon</label>
        <input type="text" class="form-control" id="no_telp" name="no_telp" required>
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