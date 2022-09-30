<?php

namespace App\Controllers;

use App\Classes\Uri;

class Controller{

    const NAMESPACE_CONTROLLER = '\\App\\Controllers\\';
    const FOLDERS_CONTROLLER = ['Site','Admin'];
    const ERROR_CONTROLLER = '\\App\\Controllers\\Erro\\ErroController';

    private $uri;

    public function __construct()
    {
        $this->uri = new Uri;
    }

    private function getController(){

        #Se existir algo apos o site
        if(!$this->uri->emptyUri()){
            //Tira o indice vazio
            $explodeUri = array_filter(explode('/', $this->uri->getUri()));
            return ucfirst($explodeUri[1]).'Controller';
        }

        return ucfirst(DEFAULT_CONTROLLER).'Controller';

    }

    public function controller() {
        
        $controller = $this->getController();
        foreach(self::FOLDERS_CONTROLLER as $folderController){
            
            if(class_exists(self::NAMESPACE_CONTROLLER.$folderController.'\\'.$controller)){
                return self::NAMESPACE_CONTROLLER.$folderController.'\\'.$controller;
            }
        }
        //Erro se não achar na pasta Site ou Admin
        return self::ERROR_CONTROLLER;
    }
}