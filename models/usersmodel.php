<?php
class UsersModel extends Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos)
    {
        try {
            // Insertar datos en la BD
            $query = $this->db->connect()->prepare('INSERT INTO USERS (NAME, USER_NAME, PASSWORD, USER_ROL) VALUES(:name, :user_name, :password, :user_rol)');
            $query->execute(['name' => $datos['name'], 'user_name' => $datos['user_name'], 'password' => $datos['password'], 'user_rol' => $datos['user_rol']]);
            return true;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            return false;
        }
    }
    public function Login($user, $pass)
    {
        // 
    }
}
