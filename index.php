<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Buscador con AJAX</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto mt-5 form-login">
                <h3 class="text-center py-3 mt-4">Inicio de Sesión</h3>
                <form action="validation.php" method="post" class="p-3">
                <!-- js-validation" novalidate -->
                    <div class="form-group">
                        <label for="usuario">Correo Electronico</label>
                        <input type="email" class="form-control" name="username" required>

                        <!-- validation -->
                        <div class="invalid-feedback">
                            Ingresa un correo electronico
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" required>

                         <!-- validation -->
                         <div class="invalid-feedback">
                            Ingresa una contraseña
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <input type="submit" class="btn btn-dark form-control" value="Ingresar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>