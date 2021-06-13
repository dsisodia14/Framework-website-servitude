<?php
// example.com/web/front.php
require_once __DIR__.'/../config.php';
require_once MAIN_DIR.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel;
use Symfony\Component\Routing;

function render_template(Request $request)
{
    extract($request->attributes->all(), EXTR_SKIP);
    ob_start();
    include sprintf(MAIN_DIR.'/src/pages/%s.php', $_route);

    return new Response(ob_get_clean());
}

$request = Request::createFromGlobals();
$routes = include MAIN_DIR.'/src/app.php';

$context = new Routing\RequestContext();
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);

$controllerResolver = new HttpKernel\Controller\ControllerResolver();
$argumentResolver = new HttpKernel\Controller\ArgumentResolver();

$framework = new Simplex\Framework($matcher, $controllerResolver, $argumentResolver);
$response = $framework->handle($request);

$response->send();