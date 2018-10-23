<?php

$classesDir = [
    'vendor',
    'models',
    'controllers',
    'helper',
];
function include_all_php($folder)
{
    foreach (glob("{$folder}/*.php") as $filename) {
        require_once $filename;
    }
}
array_map('include_all_php', $classesDir);

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $route) {
    require_once 'route/Route.php';
});
