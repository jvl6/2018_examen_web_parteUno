<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="display-4">Registrar Usuario</h1>


        <form action="../controller/registrar.php" method="post">
        <div style="margin-bottom: 25px" class="input-group">
            <input id="register-email" type="name" class="form-control" name="nombre" placeholder="Tu nombre:">
        </div>

        <div style="margin-bottom: 25px" class="input-group">
            <input id="register-password" type="password" class="form-control" name="contraseña" placeholder="Tu contraseña:">
        </div>

        <input type="submit" class="btn btn-success" value="Registrar">

    </form>
    <br>
    <a class="btn btn-danger" href="javascript:window.history.back();">Volver atrás</a>

    </div>
</body>
</html>