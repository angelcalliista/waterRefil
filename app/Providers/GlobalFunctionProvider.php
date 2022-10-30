<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;
use View;

class GlobalFunctionProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    


    }
    // public function setjnsPemesanan($param){
    //     if (!empty($param)) {
    //         $_SESSION["jnsPemesanan"] = $param;
    //      }
    // } 
    // public function getjnsPemesanan(){
    //     return $_SESSION['jnsPemesanan'] = 'g6b362 5d56t t6363 an15ng';
    // }

}
