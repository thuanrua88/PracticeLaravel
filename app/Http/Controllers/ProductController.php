<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    public function index()
    {
        return view('product.index');
    }

    public function add(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return redirect()->back();
    }
    public function form()
    {
        return view('product.add');
    }

    public function list()
    {
        $product =  Product::OrderBy('id','desc')->get();

        return view('product.list',[
            'product' => $product
        ]);
    }
    public function editView($id)
    {
        return view('product.edit');
    }
    public function edit(Request $request,$id)
    {
        $product =  Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect()->back();
    }

    public function delete($id)
    {
        $product =  Product::find($id);
        $product->delete();
        return redirect()->back();
    }


    public function findView(Request $request)
    {

        $products = Product::where('name','like','%'.$request->find.'%')->get();

        return view('product.find',[
            'products' => $products
        ]);
    }
}
