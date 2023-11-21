<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view//css//recupera.css">
    <title>Recuperacion</title>
</head>

<body>
<form action="/controladores//recuperacion_contraseña.php" method="post">
    <h2>Recuperacion</h2>

    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>

    <input type="submit" class="btn-1" value="Recuperar">
    <a href="/view//login.php" class="remember">volver</a>
</form>

</body>

</html>