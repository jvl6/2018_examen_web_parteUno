<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feria de la Música - Misión y Visión</title>
    <link rel="shortcut icon" href="../res/if_sound_speaker_811527.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
    <nav class="navbar navbar-dark">
        <a class="navbar-brand" href="../index.php">
            <img class="d-inline-block align-top" src="../res/if_sound_speaker_811527.png" alt="" width="7%">
            Feria de la Música
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <?php
                    session_start();
                    if(!isset($_SESSION['login'])){
                        $_SESSION['login'] = null;
                        echo "<a class='nav-link' href='#' data-toggle='modal' data-target='#perfil'><img class='d-inline-block align-top' src='../res/if_Rounded-31_2024644.png' alt='' width='2%'>Iniciar Sesión</a>";
                    } else {
                        echo "<a class='nav-link' href='#' data-toggle='modal' data-target='#cerrarSesion'>Bienvenido, ".$_SESSION['login']."</a>";
                    }
                ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="view/mision.php">Misión y Visión<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#productos">Productos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="modal fade" id="perfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../controller/login.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="user" placeholder="Usuario/a">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="pass" placeholder="Contraseña" autocomplete="off">
                        </div>

                        <input type="hidden" id="location" name="location" value="../view/mision.php">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <a href="registerUser.php"><button type="button" class="btn btn-success">Registrar</button></a>
                        <input class="btn btn-primary" type="submit" value="Iniciar Sesión" role="button">
                </form>
            </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="cerrarSesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Desea cerrar sesión?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../controller/cerrarSesion.php">
                    <input type="hidden" id="location" name="location" value="../view/mision.php">
                    <input class="btn btn-primary" type="submit" value="Cerrar Sesión" role="button">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
                </form>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="productos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Proximamente...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Estamos trabajando para usted.
            </div>
            </div>
        </div>
    </div>


    <br>

    <div class="container text-white rounded">
        <h1>Nuestra misión</h1>
        <br>

        <div class="row">
            <div class="col-md-8">
                <p class="lead">Nuestra compañía tiene como objetivo difundir la música, ya sea local o
                internacional, al mayor público posible. Para esto, nos comprometemos a ofrecer productos 
                de calidad, a un precio asequible, y con tiempos de entrega reducidos, sin discriminar por 
                género o país de origen.</p>

                <p class="lead">Como objetivo final tenemos crecer hasta llegar a ser la tienda de música 
                online más grande y diversa del país.</p>
            </div>

            <div class="col-md-4">
                <img src="../res/vinyl-records-945396_1920.jpg" class="img-fluid rounded" alt="">
            </div>
        </div>

        <br>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>