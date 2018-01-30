<?php
/**
 * Created by PhpStorm.
 * User: Duy Anh
 * Date: 23/01/2018
 * Time: 11:05 CH
 */

class View
{
    private $model;
    private $controller;

    public function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output()
    {
        return "<p><a href='index.php?action=clicked'>" . $this->model->string . "</a></p>";
    }
}