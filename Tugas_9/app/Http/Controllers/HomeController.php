<?php

namespace App\Http\Controllers;

class HomeController extends Controller{



    function ShowBeranda(){
        return view('beranda');
    }

    function ShowProduk(){
        return view('produk');
    }

    function ShowKategori(){
        return view('kategori');
    }

    // function ShowLogin(){
    //     return view('Login');
    // }

    function ShowIndex(){
        return view('index');
    }

}