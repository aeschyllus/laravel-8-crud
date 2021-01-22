<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CrudController extends Controller
{
    /**
     * List all of the products in the database
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $products = Product::paginate(5);

        return view('index', compact('products'))->with(request()->input('page'));
    }

    /**
     * Create a new product
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        if($request->method() == 'POST') {
            $request->validate([
                'name' => 'required',
                'detail' => 'required'
            ]);

            Product::create($request->all());

            return redirect()->route('index')->with('success', 'Product was successfully created.');
        }

        return view('create');
    }

    /**
     * Update product information
     *
     * @param \Illuminate\Http\Request  $request
     * @param \App\Models\Product   $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product) {
        if($request->method() == 'PUT') {
            $request->validate([
                'name' => 'required',
                'detail' => 'required'
            ]);

            $product->update($request->all());

            return redirect()->route('index')->with('success', 'Product was successfully updated.');
        }

        return view('update', compact('product'));
    }

    /**
     * Delete a product
     *
     * @param \App\Models\Product   $product
     * @return \Illuminate\Http\Response
     */
    public function delete(Product $product) {
        $product->delete();

        return redirect()->route('index')->with('success', 'Product was successfully deleted.');
    }
}
