<?php

namespace App\Http\Controllers;

use App\Models\tb_outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TbOutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $datas = tb_outlet::all();
        $keyword = $request->keyword;
        $datas = DB::table('tb_outlets')
        ->where('nama_outlet', 'like', '%' .$keyword. '%')
        ->get();
        return view(
            'admin.tboutlet.outlet',
            compact('datas'),
            [
                "title" => "Outlet"
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
        $model = new tb_outlet;
        return view(
            'admin.tboutlet.create',
            compact('model')
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
        $model = new tb_outlet;
        $model->id_outlet = $request->id_outlet;
        $model->nama_outlet = $request->nama_outlet;
        $model->alamat = $request->alamat;
        $model->no_telp = $request->no_telp;
        $model->save();
        alert()->success('Data Berhasil Ditambah', 'success');
        return redirect('admin/outlet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_outlet  $tb_outlet
     * @return \Illuminate\Http\Response
     */
    public function show(tb_outlet $tb_outlet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_outlet  $tb_outlet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $outlet = tb_outlet::find($id);
        return view (
            'admin.tboutlet.edit',
            compact('outlet')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_outlet  $tb_outlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = tb_outlet::find($id);
        $model->id_outlet = $request->id_outlet;
        $model->nama_outlet = $request->nama_outlet;
        $model->alamat = $request->alamat;
        $model->no_telp = $request->no_telp;
        $model->save();
        alert()->success('Data Berhasil Diubah', 'success');
        return redirect('admin/outlet');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_outlet  $tb_outlet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = tb_outlet::findOrFail($id);
        $data->delete();
        return redirect('admin/outlet');
    }
}
