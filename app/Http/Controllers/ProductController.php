<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Media\Entities\Product;
use App\Http\Requests\ProductRequest;
use App\Media\Repositores\searchProduct;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('back.product.index',compact('products'));
    }

    public function create()
    {
        return view('back.product.create');
    }

    public function store(ProductRequest $request)
    {
        $product = new product($request->all());
        $product->user_id = \Auth::user()->id;
        $product->save();
        return redirect()->route('product.index')->with('message','El producto '.$product->name.' fue creado exitosamente');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('back.product.edit',compact('product'));
    }

    public function update(ProductRequest $request,$id)
    {
        $product = Product::find($id);
        $product->fill($request->all());
        $product->save();
        return redirect()->route('product.index')->with('message','El producto '.$product->name.' fue actualizado exitosamente');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('message','El producto '.$product->name.' fue eliminado exitosamente');
    }

    public function getSearch()
    {
        return redirect()->route('product.index');
    }

    public function search(Request $request)
    {
        $search = new searchProduct($request->name,$request->filtro);
        $products = $search->getSearch();

        return view('back.product.index',compact('products'));
    }

}
