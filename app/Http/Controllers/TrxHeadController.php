<?php

namespace App\Http\Controllers;

use App\Models\trx_head;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TrxHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $trx = trx_head::all();
        // $trx = DB::table('trx_heads')
        // ->Join('trx_details', 'trx_heads.trx_no', '=', 'trx_details.trx_no')
        // ->get();
        return view(
            'admin.transaksi.transaksi',
            compact('trx'),
            [
                // 'trx' => $trx
                'name'=> 'transaksi'
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
        //
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
     * @param  \App\Models\trx_head  $trx_head
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $trx_no)
    {
        $trx = DB::table('trx_heads')
        ->find($trx_no)
        ->Join('trx_details', 'trx_head.trx_no', '=', 'trx_details.trx_no')
        ->get();
        // $trx= Trx_head::findOrFail($trx_no);
        return view(
            'admin.transaksi.show',
            // compact('trx'),
            [
                'transaksi' => $trx
            ]
        
        );
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trx_head  $trx_head
     * @return \Illuminate\Http\Response
     */
    public function edit(trx_head $trx_head)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trx_head  $trx_head
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trx_head $trx_head)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trx_head  $trx_head
     * @return \Illuminate\Http\Response
     */
    public function destroy(trx_head $trx_head)
    {
        //
    }
}
