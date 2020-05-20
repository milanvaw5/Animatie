<?php
/* In deze oefening maak je 2 pagina's aan:
-- index pagina --
Toon een overzicht van de eerste 100 series (alfabetisch op titel) uit de netflix database
Deze zitten in een lijst met een link naar de detail pagina.  Geef het id door via de querystring

-- detail pagina --
Toont de titel van de serie en een formulier om rating, released, score en vote amount aan te passen
Zorg dat je via het formulier de nodige aanpassingen kan doen
Zorg ook voor validatie zowel client side met JavaScript als server side met PHP
*/


ini_set('display_errors', true);
error_reporting(E_ALL);

$routes = array(
  'home' => array(
    'controller' => 'Shows',
    'action' => 'index'
  ),
  'show-detail' => array(
    'controller' => 'Shows',
    'action' => 'view'
  )
);

if (empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if (empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
