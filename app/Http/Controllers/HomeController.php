<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\models\tb_product;
use App\models\tb_pelanggan;
use App\models\tb_outlet;
use App\Models\trx_head;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::count();
        $pelanggan = tb_pelanggan::count();
        $product = tb_product::count();
        $outlet = tb_outlet::count();
        $trxHead = trx_head::count();
        return view(
            'admin.dashboard.dashboard',
            compact(
                'user', 'pelanggan', 'product', 'outlet', 'trxHead'
            )
        );
    }
}