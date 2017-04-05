<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Media\Entities\Product;
use App\Http\Requests\ProductRequest;
use App\Media\Repositores\searchProduct;

class ProductController extends Controller
{

    /*
     * Edward Diaz
     */

    /*
     * Muestra todos los productos y el filtro de busqueda
     */
    public function index()
    {
        $products = Product::all();
        return view('back.product.index',compact('products'));
    }

    /*
     * Muestra el formulario para crear un nuevo producto
     */
    public function create()
    {
        return view('back.product.create');
    }

    /*
     * Guarda los datos del producto y lo devuelve al listado de productos
     */
    public function store(ProductRequest $request)
    {
        $product = new product($request->all());
        $product->user_id = \Auth::user()->id;
        $product->save();
        return redirect()->route('product.index')->with('message','El producto '.$product->name.' fue creado exitosamente');
    }

    /*
     * Muestra el formulario con los datos del producto especifico por un id
     * para poder modificarlos
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('back.product.edit',compact('product'));
    }

    /*
     * Actualiza los datos del formulario donde se pueden editar los datos
     */
    public function update(ProductRequest $request,$id)
    {
        $product = Product::find($id);
        $product->fill($request->all());
        $product->save();
        return redirect()->route('product.index')->with('message','El producto '.$product->name.' fue actualizado exitosamente');
    }

    /*
     * Elimina un producto respecto a su id
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('message','El producto '.$product->name.' fue eliminado exitosamente');
    }

    /*
     * Este es para que no salga error al buscar y luego le den f5, para que muestre todos los productos
     */
    public function getSearch()
    {
        return redirect()->route('product.index');
    }

    /*
     * Este es el metodos de buscar
     * Aqui llamo un archivo que esta en App\Media\Repositories\searchProduct.php
     * que hace toda la programacion de la busqueda
     */

    public function search(Request $request)
    {
        $search = new searchProduct($request->name,$request->filtro);
        $products = $search->getSearch();

        return view('back.product.index',compact('products'));
    }

}
