<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewListBarangController extends Controller
{
    public function getData()
    {
        // logika untuk mendapatkan array data 
        $dataBarang = [
            ['id' => 1, 'nama' => 'Beras Pandan Wangi', 'harga' => 15000],
            ['id' => 2, 'nama' => 'Tepung terigu', 'harga' => 20000],
            ['id' => 3, 'nama' => 'Baygon cair', 'harga' => 13500],
            ['id' => 4, 'nama' => 'Penyedap Royco', 'harga' => 3200],
            ['id' => 5, 'nama' => 'Minyak Goreng', 'harga' => 14000],
        ];

        return $dataBarang;
    }
    
    public function index()
    {
        // Mengambil data barang dan menampilkannya di view
        $data = $this->getData();
        return view('newlistbarang', compact('data'));
    }
}
