<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Faker;


class ProdukController extends Controller{
    function index(){
        $user = request()->user();
        $data['list_produk'] = $user->produk;
        return view('produk.index',$data); 
    }

    function create(){
        return view('produk.create'); 
    }

    function store(){
        $produk = new Produk;
        $produk->id_user = request()->user()->id;
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('admin/produk');
    }

    function show(Produk $produk){
        $data['produk'] = $produk;
        return view('produk.show', $data); 
    }

    function edit(Produk $produk){
        $data['produk'] = $produk;
        return view('produk.edit',$data); 
    }

    function update(Produk $produk){
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        
        $produk->save();

        return redirect('admin/produk')->with('success', 'Data Berhasil Diedit');

    }

    function destroy(Produk $produk){
        $produk->delete();

        return redirect('admin/produk')->with('success','Data Berhasil Dihapus');
    }


    function filter(){
        $nama = request('nama');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        $data['nama'] = $nama;
        
        

        return view('produk.index', $data);
    }

    function filter2(){
        $nama = request('nama');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        $data['nama'] = $nama;
        
        

        return view('shop', $data);
    }
}