<?php

namespace App\Http\Controllers;

use App\Models\tb_stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TbStokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stok = DB::table('tb_stoks')
            ->Join('tb_products', 'tb_stoks.id_product', '=', 'tb_products.id_product')
            ->get();
        return view(
            'admin.tbstok.stok',
            [
                'stok' => $stok
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
        $model = new tb_stok;
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_stok  $tb_stok
     * @return \Illuminate\Http\Response
     */
    public function show(tb_stok $tb_stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_stok  $tb_stok
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_stok $tb_stok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_stok  $tb_stok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_stok $tb_stok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_stok  $tb_stok
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_stok $tb_stok)
    {
        //
    }
}
