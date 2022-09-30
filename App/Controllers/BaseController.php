<?php

namespace App\Controllers;

class BaseController{

    //visivel pelas classes extendidas
    protected $twig;

    public function setTwig($twig){
        $this->twig = $twig;
    }

}