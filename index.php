<?php

require_once ("./router/Router.php");

$route = new Route();

$route->add("/","html/home.php");
$route->add("/signup","html/signup.php");
$route->add("/signin","html/signin.php");
$route->add("/profile","html/profile.php");
// $route->add("/controllers/SignUpController.php","controllers/SignUpController.php");
$route->add("/products/{id}","html/item.php");
$route->notFound("html/404.php");
?>
