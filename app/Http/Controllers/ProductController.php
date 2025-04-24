<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller

{
    public function index()
    {
        // Data dummy
        $data = [
            ['id' => 1, 'produk' => 'Mobil civic'],
            ['id' => 2, 'produk' => 'Mobil brio'],
            ['id' => 3, 'produk' => 'Honda Mobilio']
        ];

        // Kirim data ke view list_product
        return view('list_product', ['data' => $data]);
    }
}