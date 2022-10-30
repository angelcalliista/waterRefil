<?php

namespace App\Http\Controllers;

use App\Models\tb_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TbProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $datas = tb_product::all();
        $keyword = $request->keyword;
        $datas = DB::table('tb_products')
            ->where('nama_product','like' ,'%'.$keyword. '%' )
            ->get();
            return view(
                'admin.tbproduct.product', 
                compact('datas'),
                [
                    "title" => 'Product'
                ]
        
        );
           
      
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new tb_product;
        return view(
            'admin.tbproduct.create',
            compact('model'),
            [
                "title" => "Tambah"
            ]
            );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new tb_product;
        // $model-> id = $request->id;
        $model-> id_outlet = $request->id_outlet;
        $model-> id_product = $request->id_product;
        $model-> nama_product = $request->nama_product;
        $model-> jns_product = $request->jns_product;
        $model-> harga = $request->harga;
        $model-> size = $request->size;
        $model-> images = $request->images;
        if($image = $request->file('images')){
            $destinationPath = 'assets/images/img-product';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $model['images'] ="$profileImage";
        }
        $model->save();
        alert()->success('Data Berhasil Ditambah', 'success');
        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_product  $tb_product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
       
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_product  $tb_product
     * @return \Illuminate\Http\Response
     */
    public function edit($id_product)
    {
        $product = tb_product::find($id_product);
        return view('admin.tbproduct.edit', compact('product'), ["title" => "edit data"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_product  $tb_product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_product)
    {
        $model = tb_product::find($id_product);
        $model-> id_outlet = $request->id_outlet;
        $model-> id_product = $request->id_product;
        $model-> nama_product = $request->nama_product;
        $model-> jns_product = $request->jns_product;
        $model-> harga = $request->harga;
        $model-> size = $request->size;
        $model-> images = $request->images;
        if($image = $request->file('images')){
            $destinationPath = 'assets/images/img-product';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $model['images'] ="$profileImage";
        }
        $model->save();
        toast('Data Berhasil Diubah', 'success');
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_product  $tb_product
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id_product)
    {
        // $product = tb_product::find($id_product);
        // $file = public_path('/assets/images/img-product') . $product->images;
        // if(file_exists($file)){
        //     @unlink($file);
            
        // }
        // $product->delete();
        // return redirect('admin/product');
    
   
        $data = tb_product::findOrFail($id_product);
        $data->delete();
        alert()->success('Data Berhasil Dihapus', 'success');
        return redirect('admin/product');  
   
   
            
    }
}
