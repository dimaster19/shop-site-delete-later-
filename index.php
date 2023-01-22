<?php

require_once ("./router/Router.php");

$route = new Route();

$route->add("/","home.php");
$route->add("/signup","signup.php");
$route->add("/signin","signin.php");
$route->add("/products/{id}","item.php");
$route->notFound("404.php");
?>
