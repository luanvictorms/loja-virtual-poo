<?php 
use App\Classes\Template;
use App\Classes\Parameters;

$parameters = new Parameters;
$parameters->explodeParameters();

$template = new Template;
$twig = $template->init();

#Chamando o controller digitado na URL http://farian.cw/controller
$callController = new App\Controllers\Controller;
#controller chamado pegando o uri(Parametro passado atraves da URL apos a do site.)
$calledController = $callController->controller();
#instanciando a classe ProdutoController
$controller = new $calledController();
$controller->setTwig($twig);

#chamando o metodo digitado na URL http://farian.cw/controller/metodo
$callMethod = new App\Controllers\Method;
#verificando e pegando o metodo dentro do controller
$method = $callMethod->method($controller);

#chamando o controller atraves da classe controller e da classe method
$controller->$method();