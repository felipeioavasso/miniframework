<?php

namespace App\Controllers;


// Recursos do Framework
use MF\Controller\Action;
use MF\Model\Container;


// Models
use App\Models\Produto;
use App\Models\Info;



class IndexController extends Action{

    protected $view;


    public function __construct(){
        $this->view = new \stdClass();
    }

    // Função para renderizar a página e passando os dados advindos do BD
    public function index(){

        $produto = Container::getModel('Produto');
        
        // Método de manipulação de dados
        @$produtos = $produto->getProdutos();
        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    }

    // Função para renderizar a página e passando os dados advindos do BD
    public function sobreNos(){

        $info = Container::getModel('Info');

        // Método de manipulação de dados
        @$infos = $info->getInfo();
        $this->view->dados = $infos;

        $this->render('sobreNos', 'layout1');
    }

}

?>