<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="/view/css/login.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <title>Inicio de Sesion</title>
</head>
<body>
 <img class="wave" src="https://www.actaverytelehealth.com/static/media/wave.66362fb1.png" >
 <div class="container">
    <div class="img">
        <img src="https://www.simlevante.com/wp-content/uploads/2022/10/waste-management-edited.png" >
    </div>
    <div class="login-content">
        <form method="POST" action="/controladores//autentication.php">
            <img src="https://www.pngall.com/wp-content/uploads/5/Profile-Avatar-PNG-Picture.png" alt="">
            <h2 class="title">Bienvenido</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Usuario</h5>
                    <input type="text" id="username" class="input" name="username">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Contraseña</h5>
                    <input type="password" id="input" class="input" name="password">
                </div>
            </div>
            <div class="btn-field">
            <input type="submit" class="submit" value="Iniciar Sesion" name="sesion"/>
            </div>
            <a href="/view//contraseña//recuperacion.php">Recuperar contraseña</a>
        </form>
    </div>
 </div>    
</body>
</html>