<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        return view('products.index');
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }
}
