<?php

namespace App\Controllers;

use App\Classes\Uri;

class Method{
    //Somente dentro da classe
    private $uri;

    public function __construct()
    {
        $this->uri = new Uri;
    }

    //Somente dentro da classe
    private function getMethod(){
        if(!$this->uri->emptyUri()){
            $explodeUri = array_filter(explode('/',$this->uri->getUri()));
            return (isset($explodeUri[2])) ? $explodeUri[2] : null;
        }
    }

    public function method($object){
        //Se existir o metodo dentro do controller(objeto), metodo, retorna true
        if(method_exists($object, $this->getMethod())){
            return $this->getMethod();
        }
        return DEFAULT_METHOD;
    }
}