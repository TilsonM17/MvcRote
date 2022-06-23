<?php

namespace src\controller;

use src\helpers\Views;

class Main
{

    public function index()
    {
        Views::layout(['home']);
    }
    public function sobre()
    {
        echo "sobre";
    }

}
