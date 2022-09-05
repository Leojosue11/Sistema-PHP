<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require 'views/header.php'; ?>

    <div id="main">
        <h1 class="center">Seccion de Usuarios</h1>
        <form action="<?php echo constant('URL'); ?>users/AddUser" method="post">
            <div class="container">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="user_name">User Name</label>
                        <input type="text" class="form-control" name="user_name" id="user_name" placeholder="User name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user_rol">Rol de usuario</label>
                        <select class="form-control" id="user_rol" required>
                            <option>1</option>
                            <option>2</option>
                        </select>
                        <!-- <input type="number" class="form-control" name="user_rol" id="user_rol" required> -->
                    </div>
                    <div class="form-group 2">
                        <input type="submit" class="btn btn-primary" value="Registrar Usuario">
                    </div>
                </div>
            </div>

        </form>
    </div>
    <?php require 'views/footer.php'; ?>
</body>

</html>