<?php

namespace App\Http\Controllers;

use App\Models\tb_pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class TbPelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = tb_pelanggan::all();
        return view('admin.tbpelanggan.pelanggan', 
        compact('datas'),
        [
            "title"=>"Pelanggan"
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new tb_pelanggan;
        return view(
            'admin.tbpeplanggan.create',
            compact('model'),
            [
                "title"=> "Tambah"
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
        $model = new tb_pelanggan;
        $model-> id_pelanggan = $request->id_pelanggan;
        $model-> nama_pelanggan = $request->nama_pelanggan;
        $model-> alamat = $request->alamat;
        $model-> no_telp = $request->no_telp;
        $model->save();
        alert()->success('Data Berhasil Ditambah', 'success');
        return Redirect(
            'admin/pelanggan'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_pelanggan  $tb_pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(tb_pelanggan $tb_pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_pelanggan  $tb_pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggan = tb_pelanggan::find($id);
        return view(
            'admin.tbpelanggan.edit', 
            compact('pelanggan'),
            [
                "title" => "Edit Pelanggan"
            ]
        
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_pelanggan  $tb_pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = tb_pelanggan::find($id);
        $model-> id_pelanggan = $request->id_pelanggan;
        $model-> nama_pelanggan = $request->nama_pelanggan;
        $model-> alamat = $request->alamat;
        $model-> no_telp = $request->no_telp;
        $model->save();
        alert()->success('Data Berhasil Diubah', 'success');
        return redirect(
            'admin/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_pelanggan  $tb_pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = tb_pelanggan::findOrFail($id);
        $data->delete();
        return redirect('admin/pelanggan');
    }
}
