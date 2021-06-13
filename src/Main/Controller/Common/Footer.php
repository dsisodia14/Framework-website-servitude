<?php
// example.com/src/Calendar/Controller/LeapYearController.php
namespace Main\Controller\Common;

use Main\Model\LeapYear;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Simplex\Engine\Controller;

class Footer extends controller
{
    private $controller;

    public function __construct()
    {
        $cont = new Controller;
        $this->controller = $cont;
    }
    public function index()
    {
        $data = array();
        $data['action'] = '../src/Main/View/assets';
        return ($this->controller->loadView('/theme/common/footer.php',$data));
    }
}