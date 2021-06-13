<?php

namespace Simplex\Engine;

// functions for controller:

class View
{

public function renderView($view,$param)
{
    $layoutContent = $this->layoutContent();
    $viewContent = $this->viewContent($view,$param);
    return str_replace('{{content}}',$viewContent,$layoutContent);
}

protected function layoutContent()
{
    ob_start();
    include MAIN_DIR."/src/Main/View/layouts/main.php";
    return ob_get_clean();
}

protected function viewContent($view,$param)
{
    foreach($param as $key=>$value){
        $$key = $value;
    }
    ob_start();
    include MAIN_DIR."/src/Main/View/$view";
    return ob_get_clean();
}

}