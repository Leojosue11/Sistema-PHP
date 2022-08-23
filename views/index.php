<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/fontawesome/css/all.css">

    <title>Login</title>
</head>

<body>

    <form method="POST" action="" id="login">
        <div class="user">
            <label for="user">Usuario</label>
            <input id="user" type="text" name="usuario">
        </div>
        <div class="password">
            <label for="pass">Contraseña</label>
            <input id="pass" type="password" name="password">
        </div>

        <button type="submit" id="loginButton">Submit</button>
    </form>
    <script src="../js/jquery-3.5.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function login() {
            let userinfo = {
                user: document.getElementById("user").value,
                password: document.getElementById("pass").value
            };

            console.log(userinfo);

            if (userinfo.user != "" && userinfo.password != "") {
                console.log("Entra a peticion");
                $.ajax({
                    url: '../Controllers/LoginController.php',
                    type: 'POST',
                    data: userinfo,
                    success: function(response) {
                        console.log("Peticion exitosa")
                        if (response.status == 1) {
                            console.log("si hay respuesta");
                        } else {
                            console.log("no hubo respuesta");
                        }
                    }
                })
            }

        }
        $('#login').on('submit', function(event) {
            event.preventDefault();
            console.log("intento de login")
            login();
        })
    </script>
</body>


</html>