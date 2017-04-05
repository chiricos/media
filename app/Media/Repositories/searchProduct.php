<?php

namespace App\Media\Repositores;

use App\Media\Entities\Product;

class searchProduct{

    /*
     * Edward Díaz
     * se declaran las variables que se van a utilizar
     */
    private $name;
    private $products;

    /*
     * En el constructor pide los datos de la busqueda y el filtro de que campo quiere buscar
     */
    public function __construct($name,$filtro)
    {

        /*
         * Aqui se asigna el nombre y segun el filtro se llaman funciones especificas para la busqueda dependiendo
         * el campo por el que busque
         */
        $this->name = $name;
        if(empty($name)){
            $this->searchAll();
        }else{
            $this->searchName();
        }
        if($filtro == "name"){
            $this->searchName();
        }
        if($filtro ==  "color"){
            $this->searchColor();
        }
        if($filtro == "volume"){
            $this->searchVolume();
        }
        if($filtro == "price"){
            $this->searchPrice();
        }
    }

    /*
     * Este metodo retorna los resultados de la busqueda
     */
    public function getSearch()
    {
        return $this->products;
    }

    /*
     * Este metodo buscar por nombre
     */
    public function searchName()
    {
        $this->products = Product::where('name','LIKE','%'.$this->name.'%')->get();
    }

    /*
     * Este metodo busca por color
     */
    public function searchColor()
    {
        $this->products = Product::where('color','LIKE','%'.$this->name.'%')->get();
    }

    /*
     * Este metodo busca por volumen
     */
    public function searchVolume()
    {
        $this->products = Product::where('volume','LIKE','%'.$this->name.'%')->get();
    }

    /*
     * Este metodo busca por precio
     */
    public function searchPrice()
    {
        $this->products = Product::where('price','LIKE','%'.$this->name.'%')->get();
    }

    /*
     * Este metodo muestran todos los productos cuando no se escribe nada en buscar
     */
    public function searchAll(){
        $this->products = Product::all();
    }

}

?>