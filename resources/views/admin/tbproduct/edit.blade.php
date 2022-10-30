    @extends('layouts.admin.dashboard-body')
    
    @section('container')
    <div class="container">
        <div class="m-5 text-center"><h2>Edit Product</h2></div>
        <form method="POST" action="{{ url('admin/product/' .$product->id_product) }}"  enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label for="formGroupExampleInput">Id Outlets</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="id_outlet" value="{{ $product->id_outlet }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Id Product</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="id_product" value="{{ $product->id_product }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Nama Product</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="nama_product" value="{{ $product->nama_product }}">
            </div>
            <select class="form-select mt-4" name="jns_product" aria-label="Default select example" value="{{ $product->jns_product }}"> 
                <option selected>Jenis Product</option>
                <option value="isi_ulang">Isi Ulang</option>
                <option value="product_asli">Produk Asli</option>
            </select>
            <div class="form-group">
                <label for="formGroupExampleInput2">Harga</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="harga" value="{{ $product->harga }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Size</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="size" value="{{ $product->size }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Images</label>
                <input type="file" class="form-control" id="images" name="images"  value="{{ old('images') }}">

                <img id="preview-image-before-upload" src="/assets/images/img-product/{{ $product->images }}" value=""  alt="" style="width: 250px">
            </div>
           
            <button style="background-color: #1D5576; border: unset" type="submit" class="btn btn-primary mt-4 mb-5">Ubah</button>
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