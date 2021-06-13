<?php
// example.com/src/Calendar/Controller/LeapYearController.php
namespace Main\Controller\Common;

use Main\Model\LeapYear;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Simplex\Engine\Controller;

class Home extends controller
{
    private $controller;

   /*  public function __construct()
    {
        $cont = new Controller;
        $this->controller = $cont;
    } */
    public function index(Request $request)
    {
        /* $data['header']=$this->loadController('/common/Header.php',__NAMESPACE__.'\Header');
        $data['footer']=$this->loadController('/common/Footer.php',__NAMESPACE__.'\Footer');
        $data['name'] = 'Vaibhav'; */
        $data = array();
        return new Response($this->loadView('/theme/common/home.php',$data));
    }
}