<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="img/logo_login.png" id="icon" alt="Juegos Panamericanos 2019" />
          </div>
      
          <!-- Login Form -->
          <form method="POST" action="login.php">
            <input type="text" id="login" class="fadeIn second" name="txt_usuario" placeholder="Usuario">
            <input type="password" id="password" class="fadeIn third" name="txt_contraseña" placeholder="Contraseña">
            <input type="submit" class="fadeIn fourth" value="Ingresar">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">¿Olvidaste tu contraseña?</a>
          </div>
      
        </div>
      </div>

</body>
</html>