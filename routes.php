<?php

$request = $_SERVER['REQUEST_URI'];
$removeRoot = str_replace('/kawaii/','',$request,);
$curdir = dirname($_SERVER['REQUEST_URI']);
$baseUri = str_replace($curdir, '', $request);
switch ($removeRoot) {
    case 'TemplateTrialController':
        require __DIR__ . '/Resources/Controller/Back/TemplateTrialController.php';
        break;
    default:
        require __DIR__ . '/View/index.php';
        break;





}

