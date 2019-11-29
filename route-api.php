<?php
require_once("Router.php");
require_once("./api/ComentariosApiController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$resource = $_GET["resource"];

$method = $_SERVER["REQUEST_METHOD"];

$router = new Router();

$router->addRoute("comentarios/:ID", "GET", "ComentariosApiController", "getComentarios");
$router->addRoute("comentarios/:ID", "DELETE", "ComentariosApiController", "deleteComentario");
$router->addRoute("comentarios", "POST", "ComentariosApiController", "addComentario");

$router->route($resource, $method);
?>