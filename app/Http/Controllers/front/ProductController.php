<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    //
    public function index()
    {
        $product = Product::all();
        $categories = Category::all();
        $products = Product::paginate(1);
        $count = $product->count();
        return view('front.product.index', compact('products', 'categories', 'count'));
    }
}
