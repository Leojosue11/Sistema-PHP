<?php

class Users extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('users/index');
    }


    function AddUser()
    {
        $name = $_POST['name'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $user_rol = $_POST['user_rol'];

        if ($name != "" && $user_name != "" && $password != "" && $user_rol != ""); {
            $pass_hash = password_hash(trim($password), PASSWORD_BCRYPT);
            if ($this->model->insert(['name' => $name, 'user_name' => $user_name, 'password' => $pass_hash, 'user_rol' => $user_rol])) {
                echo "Nuevo alumno cread";
            }
            echo "Usuario Agregado";
        }
    }
}
