<?php

namespace App\Http\Controllers;

use App\CoffeeProducts;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function getIndex()
    {
        $products = CoffeeProducts::all();
        return view('shop.index', ['products' => $products]);
    }
}
