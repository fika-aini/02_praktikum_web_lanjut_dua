<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }
    public function about(){
        echo "NIM : 2P041720099 <br>
        Nama : Rofika Nur 'Aini <br>
        Kelas : TI-2B";
    }
    public function articles($id){
        return 'Halaman Artikel dengan ID ' .$id;
    }
}
