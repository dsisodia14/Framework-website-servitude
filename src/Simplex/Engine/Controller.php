<?php

namespace Simplex\Engine;
use Simplex\Engine\View;

// functions for controller:

class Controller
{
    public function loadView($view, $vars = array())
    {  
        /* include MAIN_DIR."/src/Main/View/$view"; */
        $viewobject = new view();
        $loaded = $viewobject->renderView($view,$vars);
        echo $loaded;
    }

    public function loadController($controller,$className)
    {
        require MAIN_DIR."/src/Main/Controller/$controller";
        $header = new $className;
        $header->index();
    }

}