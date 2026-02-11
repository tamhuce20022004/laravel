<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Hiển thị danh sách tất cả sản phẩm
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    /**
     * Hiển thị chi tiết một sản phẩm
     */
    public function show($id)
    {
        $product = Product::find($id);
        
        if (!$product) {
            return redirect()->route('product.index')->with('error', 'Sản phẩm không tồn tại');
        }
        
        return view('product.show', ['product' => $product]);
    }
}
