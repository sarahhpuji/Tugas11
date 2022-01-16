<?php

namespace App\Http\Controllers;
use App\Models\Product;

class HomeController extends Controller{

    function showhome(){
        return view('FrontView.home');
    }

    function showabout(){
        return view('FrontView.about');
    }

    function showcontact(){
        return view('FrontView.contact');
    }

    function showproduct(){
        return view('FrontView.product');
    }

    function showtestimonial(){
        return view('FrontView.testimonial');
    }

    function showdashboard(){
        return view('BackView.dashboard');
    }

    function showkategori(){
        return view('BackView.kategori');
    }

    function showsupplier(){
        return view('BackView.supplier');
    }

    function showcolegan(){
        return view('BackView.colegan');
    }

    function showproduct2(){
        return view('BackView.product2');
    }

    function Product($Produk, $hargaMin = 0 , $hargaMax = 0){
        if($Produk == 'Jam Tangan'){
            echo "Produk Jam Tangan";
        }elseif($Produk == 'Jam Tangan Pria'){
            echo "Produk Jam Tangan Pria";
        }
        echo "<br>";
        echo "Harga Min adalah $hargaMin <br>";
        echo "Harga Max adalah $hargaMax <br>";

    }

    public function testCollection()
    {
        $list_jam = ['Rolex', 'Quicksilver', 'Seiko', 'Cassio', 'Alexandre Christie', 'G-Shook'];
        $list_jam = collect($list_jam);
        $list_produk = Product::all();

        // Sorting
        // Sort By Harga Terendah
        // dd($list_produk->sortBy('harga'));
        // Sort By Harga Tertinggi
        // dd($list_produk->sortByDesc('harga'));
        // $data['list'] = $list_produk;
        // return view('test-collection', $data);

        // map
        // filter

        // $filtered = $list_produk->filter(function($item){
        // return $item->harga > 1500000;
        // });

        // dd($filtered);

        // $sum = $list_produk->sum('stock');
        // dd($sum);

        $data['list'] = Product::Paginate(15);
        return view('test-collection', $data);
        
        dd($list_jam, $list_produk);
    }

}