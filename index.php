<?php

require_once ("./router/Router.php");

$route = new Route();

// $route->add("/home","home.php");
// $route->add("/","home.php");

$route->add("/","home.php");
$route->add("/home/{id}","home.php");
$route->add("/{id}","item.php");
$route->notFound("404.php");
?>
