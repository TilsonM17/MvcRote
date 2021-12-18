<?php

namespace src\controller;

use src\helpers\Views;

class Main
{

    public function index()
    {
        Views::layout(
            ['fragmento/header',
            'inicio',
            'fragmento/footer',
            ]);

    }
    public function sobre()
    {
        
    }

}
