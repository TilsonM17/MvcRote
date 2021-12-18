<?php
/**
 * Criar um script que guarda um carrinho de compras onde o usuario
 * Vai selecionar os produtos e guardar na sessao 
 */
 require_once 'vendor/autoload.php';

 /**
  * Obj : Criar uma rota para as requisições e chamar um controlador para executar tal request
  * 1 - Pegar a Query String
  * 2 - Verificar se ele existe
        * 2.1 - Se não existir Atribui por padão a rota index
        * 2.2 - Se existir
  */
 $rotas = [
     'index' => 'main@index',
     'sobre' => 'main@sobre'
 ];

 $query = @$_GET['k'];
 $def = $query;
 if(!key_exists($query,$rotas) || !isset($query))
 { //
    $def = "index";
 }
  //Variavel para guardar o metodo e o seu Controller
     $intermediario = explode("@",$rotas[$def]);
     $controler = "src\\controller\\".ucfirst($intermediario[0]);
     $action = $intermediario[1];
     (new $controler)->$action();

 