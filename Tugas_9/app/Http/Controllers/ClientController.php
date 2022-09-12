<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ClientController extends Controller {
    // function filter(){
    //     // $data['list_produk'] = Produk::all();
    //     return view('index');
    // }
    // function Show(Produk $produk){
    //     $data['produk'] = $produk;
    //     return view('shop', $data);
    // }
    function prod(){
        $data['list_produk'] = Produk::all();
        return view('shop', $data);
    }
}