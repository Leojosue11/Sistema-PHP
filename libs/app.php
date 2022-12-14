<?php
require_once 'controllers/errores.php';
class App
{

    function __construct()
    {
        // Si no encuetra ningun controlador siempre se ira al main
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        // Obtiene la url
        // $url = $_GET['url'];
        if (empty($url[0])) {
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->LoadModel('main');
            return false;
        }
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        $archivoController = 'controllers/' . $url[0] . '.php';

        if (file_exists($archivoController)) {
            require_once $archivoController;
            $controller = new $url[0];
            $controller->LoadModel($url[0]);

            if (isset($url[1])) {
                // Manda a llamar al metodo si es lo hay
                $controller->{$url[1]}();
            }
        } else {
            $controller = new Errores();
        }
    }
}
