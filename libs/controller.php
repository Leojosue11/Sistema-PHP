<?php

class Controller
{

    function __construct()
    {
        $this->view = new View();
    }

    function LoadModel($model)
    {
        $url = 'models/' . $model . 'model.php';

        if (file_exists($url)) {
            require $url;

            $modelName = $model . 'Model';
            $this->model = new $modelName();
        }
    }
}
