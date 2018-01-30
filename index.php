<?php
/**
 * Created by PhpStorm.
 * User: Duy Anh
 * Date: 23/01/2018
 * Time: 11:10 CH
 */
require_once "Model.php";
require_once "View.php";
require_once "Controller.php";

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action']))
{
    $controller->{$_GET['action']}();
}

echo $view->output();