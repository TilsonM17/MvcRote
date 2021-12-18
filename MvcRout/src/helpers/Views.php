<?php

namespace src\helpers;


class Views{

    public static function layout(array $visao){
         if(!is_array($visao))
              throw new Exception("Idiota isso não é um aray", 1);
           foreach ($visao as $key => $value) {
               # code...
               require_once "src/views/{$value}.php";
           }
              
    }
}