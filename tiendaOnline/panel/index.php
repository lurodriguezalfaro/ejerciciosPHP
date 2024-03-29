
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>El Mistol</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">El Mistol Mueblería</a>
        </div>
 
      </div>
    </nav>

    <div class="container" id="main">
      <div class="main-login">
       <form action="login.php" method="post">
        <div class="panel panel-default">
          <div class="panel-heading">
          <h3 class="text-center">Acceso al Panel</h3>
          </div>
          <div class="panel-body">
            <p class="text-center">
              <img src="../assets/imagenes/logo.png" alt="Logo El Mistol Muebleria" width="80%" >
            </p>
            <div class="form-group">
              <label for="">Usuario</label>
              <input type="text" class="form-control" name="nombre_usuario" placeholder="Usuario" required>
            </div>
            <div class="form-group">
              <label for="">Clave</label>
              <input type="password" class="form-control" name="clave" placeholder="Clave" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
        </div>
       </form> 
      </div>
    </div> <!-- /container -->
    <footer class="footer container-fluid bg-primary text-center">
      <div class="col-md-6">
        <p> <span class="glyphicon glyphicon-copyright-mark"></span> Realizado por: <a href="http://linkedin.com/in/lurodriguezalfaro" target="_blank">Lucila Rodriguez Alfaro</a></p>
      </div>
      <div class="col-md-6 text-center">
        <ul class="list-inline">
        <li><a href="../index.php" target="_blank"><span class="glyphicon glyphicon-home"></span> Tienda</a></li>
          <li><a href="https://wa.me/542613620148" target="_blank"><span class="glyphicon glyphicon-comment"></span> WhatsApp</a></li>
        </ul>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

  </body>
</html>
