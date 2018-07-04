<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="https://live.pystatic.com/webassets/fonts-ddbdb64488fa2d770da5122493f3ba5f.css" />
    <link rel="stylesheet" href="https://live.pystatic.com/webassets/style-400c961b9422d0b827fabfdc06544aca.css" />

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url("../images/walpapersjpeg.jpeg");
            background-size: cover;
        }
        h4 { color: white}
    </style>
</head>
<body>
<nav class=" navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Tienda Online</a>
        </div>



                    <?php
                    if ($_SESSION['username']){
                        echo "<ul class='nav navbar-nav navbar-right'>";
                        echo "<li><a><span class='glyphicon glyphicon-user'></span>";
                        $usuario = $_SESSION["username"];
                        echo $usuario;
                        echo "<li><a href='../controller/cerrarSesion.php'><span class='glyphicon glyphicon-log-in'></span> Cerrar Sesion</a></li>";

                    }else{
                        echo "<ul class='nav navbar-nav navbar-right'>";
                        echo "<li><a><span class='glyphicon glyphicon-warning-sign'></span>   Iniciar Sesion Porfavor</a>";
                    }


                    ?>


                </a></li>
        </ul>
    </div>
</nav>

<span class="hgroups" style="background: #f52f41">
<h1>Discos Disponibles</h1>
</span>


</body>
</html>
