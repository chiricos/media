<?php

namespace App\Media\Repositores;

use App\Media\Entities\Product;

class searchProduct{

    private $name;
    private $filtro;
    private $products;

    public function __construct($name,$filtro)
    {
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

    public function getSearch()
    {
        return $this->products;
    }

    public function searchName()
    {
        $this->products = Product::where('name','LIKE','%'.$this->name.'%')->get();
    }

    public function searchColor()
    {
        $this->products = Product::where('color','LIKE','%'.$this->name.'%')->get();
    }

    public function searchVolume()
    {
        $this->products = Product::where('volume','LIKE','%'.$this->name.'%')->get();
    }

    public function searchPrice()
    {
        $this->products = Product::where('price','LIKE','%'.$this->name.'%')->get();
    }

    public function searchAll(){
        $this->products = Product::all();
    }

}

?>