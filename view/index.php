<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/login.css">

    <title>INICIO</title>

</head>
<body>
    <div class="container">
        <div id="container_demo" >
        
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form  action="controller/iniciarSesion.php" method="post">
                        <h1>Iniciar Sesion</h1>
                        <p>
                            <label for="username" class="uname" > Usuario </label>
                            <input id="username" name="username" required="required" type="text" placeholder="usuario"/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd"> Contraseña </label>
                            <input id="password" name="password" required="required" type="password" pattern=".{3,}" placeholder="contraseña" />
                        </p>
                        
                        <p class="signin button">
                            <a href="controller/cerrarSesion.php"><input type="submit" value="Iniciar"/></a>
                        </p>
                        <p class="change_link">
                            Registrate aqui?
                            <a href="#toregister" class="to_register">Registrarse</a>
                        </p>
                    </form>
                </div>

                <div id="register" class="animate form">
                    <form  action="controller/registrar.php" method="post">
                        <h1> Registro de usuario </h1>
                        <p>
                            <label for="namesignup" class="uname" >Usuario</label>
                            <input type="text" name="name" id="name" required placeholder="usuario">
                        </p>
                        <p>
                            <label for="passwordsignup" class="youpasswd" >Contraseña </label>
                            <input id="passwordsignup" name="passwordsignup" required="required" type="password" pattern=".{3,}" placeholder="contraseña"/>
                        </p>
                        <p class="signin button">
                            <input type="submit" value="Registrar"/>
                        </p>
                        <p class="change_link">
                            Ya tienes una cuenta?
                            <a href="#tologin" class="to_register"> Iniciar Sesion </a>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        function check(){
            document.formul.enviar.value = "Procesando Formulario";
            document.formul.enviar.disabled = true;
            document.formul.submit();
        }
    </script>
    
</body>
</html>