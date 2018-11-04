<?php
spl_autoload_register();

$url = $_SERVER['REQUEST_URI'];

$url_data = explode('/', $url);

array_shift($url_data);
array_shift($url_data);

$controller = $url_data[0] ?? 'products' ?: 'products';
$action = $url_data[1] ?? 'index';
$param = $url_data[2] ?? null;

$controller_name = ucfirst($controller);
$db = \Db\DBConnection::getConnection();
$controller = 'Controllers\\' . $controller_name . 'Controller';

if (!class_exists($controller)) {
    throw new Exception('Non valid controller:' . $controller);
}

$controller_obj = new $controller($db);

$controller_obj->$action($param);

