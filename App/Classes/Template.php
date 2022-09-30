<?php

namespace App\Classes;
class Template {


    public function loader(){
        $folderView = realpath(__DIR__ . '/..');
        return new \Twig\Loader\FilesystemLoader([$folderView . '/Views/site', $folderView . '/Views/admin']);
    }

    public function init(){
        $twig = new \Twig\Environment($this->loader(), [
            'debug' => true,
            //'cache' => '',
            'auto_reload' => true
        ]);
        return $twig;
    }

}