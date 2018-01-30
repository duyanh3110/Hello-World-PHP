<?php
/**
 * Created by PhpStorm.
 * User: Duy Anh
 * Date: 23/01/2018
 * Time: 11:08 CH
 */

class Controller
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function clicked()
    {
        $this->model->string = "Updated Hello World!";
    }
}