@extends('layouts.admin.dashboard-body')
    
@section('container')
<div class="container">
    <div class="m-5 text-center"><h2>Edit Pelanggan</h2></div>
    <form method="POST" action="{{ url('admin/outlet/' .$outlet->id) }}"  enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            <label for="formGroupExampleInput">Id Outlet</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="id_outlet" value="{{ $outlet->id_outlet }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Nama Outlet</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="nama_outlet" value="{{ $outlet->nama_outlet }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Alamat</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="alamat" value="{{ $outlet->alamat }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">No Telepon</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="no_telp" value="{{ $outlet->no_telp }}">
        </div>   
        <button style="background-color: #1D5576; border: unset" type="submit" class="btn btn-primary mt-4">Ubah</button>
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