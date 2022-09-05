<?php

class View
{

    function __construct()
    {
        //    Llama la vista
    }

    function render($nombre)
    {
        require 'views/' . $nombre . '.php';
    }
}
