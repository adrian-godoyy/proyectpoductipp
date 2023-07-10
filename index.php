<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="icono.png">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title >Fundacion canina</title>

  </head>
  <body>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-sm bg-dark">

          <!-- venta emergente, interacción con el usuario
        <script>
          var saludo = "Bienvenido";
         alert(saludo);
       var carrera;
      carrera = prompt('Ingrese su nombre','nombre ');
      var mensaje = ' que tengas una linda experiencia: ';
      mensaje = mensaje.concat(carrera);
      alert(mensaje)
        </script>
        -->
        <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos ingresados por el usuario
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $interes = isset($_POST["interes"]) ? true : false;

        // Mostrar los datos ingresados
        echo "<h2>Datos ingresados:</h2>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Edad: $edad</p>";
        echo "<p>Interés en la información: " . ($interes ? "Sí" : "No") . "</p>";


    }
    
    ?>

        <!-- barra de navegación -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cuento.php">Cuento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Fibonacci.php">Fibonacci</a>
          </li>
        </ul>
      
      <!-- introducción de la pagina  -->
    </nav>
     <!-- Verificar la edad y mostrar contenido diferente-->
    <h1 style="text-align:center;">Fundación canina</h1>
      <h2>Adopta un perrito </h2>
              <h3>¿quiere a dopartar a un perrito rescatado? todos ellos fueron abandonados en las calles y los rescatamos, rehabilitamos
                  recibiendo atencion medica y emocional.   </h3>   
                  <p style="font-size: 30px;" >todos ellos estan listos para una nueva familia que los quiera</p>
              
   <?php
    
    
   ?>

    <!-- carrusel de 5 imagenes pasado en variables  -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <?php
         $directorio = "p1.jpg";
         $imagenes = glob($directorio);
          foreach ($imagenes as $imagen) {
              echo '<img src="' . $imagen . '" alt="" class="d-block w-50 rounded mx-auto width="350" height="550"" /><br />';
            }
        ?>
        </div>
        <div class="carousel-item">
        <?php
          $directorio = "p2.jpg";
          $imagenes = glob($directorio);
          foreach ($imagenes as $imagen) {
          echo '<img src="' . $imagen . '" alt="" class="d-block w-50 rounded mx-auto width="350" height="550"" /><br />';
          }
        ?>
        </div>
        <div class="carousel-item">
        <?php
          $directorio = "p3.jpg";
          $imagenes = glob($directorio);
          foreach ($imagenes as $imagen) {
          echo '<img src="' . $imagen . '" alt="" class="d-block w-50 rounded mx-auto width="350" height="550"" /><br />';
          }
        ?>
        </div>
        <div class="carousel-item">
        <?php
          $directorio = "p4.jpg";
          $imagenes = glob($directorio);
          foreach ($imagenes as $imagen) {
          echo '<img src="' . $imagen . '" alt="" class="d-block w-50 rounded mx-auto width="350" height="550"" /><br />';
          }
        ?>
        </div>
        <div class="carousel-item">
        <?php
          $directorio = "p5.jpg";
          $imagenes = glob($directorio);
          foreach ($imagenes as $imagen) {
          echo '<img src="' . $imagen . '" alt="" class="d-block w-50 rounded mx-auto width="350" height="550"" /><br />';
          }
        ?>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div>
      
      <h1 style="text-align:center;">Fundacion albergue canino</h1>
      </body>
      
  
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Enlaces
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a href="#">HTML</a></li>
        <li><a href="#">CSS</a></li>
        <li><a href="#">JavaScript</a></li>
        </ul>
    </div>
     <!--    -->
  <div>
    <h2>Consejos para hacer feliz a tus perritos</h2>
    <?php
      if ($edad < 18) {
          echo "<h3>Eres menor de edad</h3>";
          echo 
          $parrafo1 = "<p style='font-family: Impact, sans-serif; font-size: 20px ;'>Saca a pasear a tu mascota con tus padres</p>";
        
          $parrafo2 = "<p style='font-family: Courier New, monospace; font-size: 20px;'>No cambies la rutina de tu mascota, hazle cariño :)</p>";
        
          $parrafo3 = "<p style='font-family: Verdana, sans-serif; font-size: 20px;'>Cuando no puedas salir con tus padres, ejercita a tu mascota en casa</p>";
        
          $parrafo4 = "<p style='font-family: Times New Roman, serif; font-size: 20px;'>Puedes crearle algunos retos a tu mascota para que encuentre su comida dentro de la casa</p>";
        
          $parrafo5 = "<p style='font-family: Arial, sans-serif; font-size: 20px;'>Alimenta correctamente a tu mascota según su edad :)</p>";
      } 
      else {
          echo "<h3>Eres mayor de edad</h3>";
          echo 
          $parrafo1 = "<p style='font-family: Impact, sans-serif; font-size: 20px ;'>Es importante mantener la rutina de tu mascota lo más intacta posible. La alimentación,el baño y las caminatas 
          deberían darse como de normal y si tu perro está acostumbrado a ir en auto,no es mala idea seguir llevándolo
          a dar una vuelta</p>";

          $parrafo2 = "<p style='font-family: Courier New, monospace; font-size: 20px;'>No es buena idea cambiar la rutina de la mascota y darle mucha socialización. las mascotas
          no son niños. No hay que mantenerlos ocupados con actividades todo el día.
          Tu mascota está acostumbrada a tener tiempo para sí misma mientras la familia está fuera, 
          así que trata de darle tiempo de descanso durante el día. </p>";

          $parrafo3 = "<p style='font-family: Verdana, sans-serif; font-size: 20px;'>Es posible que no puedas llevar al perro al parque para que haga ejercicio, pero aun así puedes encontrar 
          formas de hacerle descargar toda la energía . Incluso un viaje al buzón puede suponer un poquito de ejercicio
          . Si no puedes salir de casa, aparta algunos muebles y deja espacio para lanzarle algún juguete o jugar al tira y afloja.
          </p>";

          $parrafo4 = "<p style='font-family: Times New Roman, serif; font-size: 20px;'>Otra buena forma de cansar a tu mascota es con la estimulación mental, como enseñarle un par de trucos nuevos.
          También puedes aprovechar la hora de la comida como una forma de enriquecer mentalmente a tu mascota 
          Esparce la comida por la casa y haz que use el sentido del olfato para encontrarla o hazte con un 
          comedero tipo rompecabezas para que le suponga un pequeño desafío mental.</p>";

          $parrafo5 = "<p style='font-family: Arial, sans-serif; font-size: 20px;'> Elegir una buena alimentación para perros es fundamental para aportarles 
          todos los nutrientes esenciales y favorecer su estado de salud. como sucede en las personas, los 
          perros tienen necesidades nutricionales y energéticas distintas en función de su edad, tamaño, etapa de vida, nivel de 
          actividad física y otros factores específicos en cada animal. En consecuencia, es importante adaptar la comida para perros cuando son cachorros y realizar 
          una transición de la alimentación en la etapa.</p>";
        }
    ?>
 
     <?php
       echo  "<h3> 1. Seguir una rutina</h3>" .$parrafo1;
       $directorio = "c1.jpg";
       $imagenes = glob($directorio);
        foreach ($imagenes as $imagen) {
            echo '<img src="' . $imagen . '" alt="" class="rounded" width="304" height="236"" /><br />';
          }
       echo  "<h3>2. No descuides su rato de descanso</h3>".$parrafo2;
       $directorio = "c2.jpg";
       $imagenes = glob($directorio);
        foreach ($imagenes as $imagen) {
            echo '<img src="' . $imagen . '" alt="" class="rounded" width="304" height="236"" /><br />';
          }
       echo   "<h3> 3.Ejercicios </h3>".$parrafo3;
       $directorio = "c3.jpg";
       $imagenes = glob($directorio);
        foreach ($imagenes as $imagen) {
            echo '<img src="' . $imagen . '" alt="" class="rounded" width="304" height="236"" /><br />';
          }
       echo   "<h3>4. Juega a juegos mentales</h3>".$parrafo4;
       $directorio = "c4.jpg";
       $imagenes = glob($directorio);
        foreach ($imagenes as $imagen) {
            echo '<img src="' . $imagen . '" alt="" class="rounded-circle" width="304" height="236"" /><br />';
          }
       echo "<h3>5.Sigue una dieta saludable </h3> ".$parrafo5;
       $directorio = "c5.jpg";
       $imagenes = glob($directorio);
        foreach ($imagenes as $imagen) {
            echo '<img src="' . $imagen . '" alt="" class="rounded-circle" width="304" height="236"" /><br />';
          }
    ?>
      </body> 
  </div>

  <!--  final de la pagina "footer"
        otra de mis debilidades que costo que footer se pudiera ver bien y ordenado  en la pagina  -->


  <footer>

    <div class="card bg-dark">
        <h5 class="card-header text-primary">Datos de contacto</h5>
        <div class="card-body">
          <h5 class="card-title text-primary">Adrián Godoy Y</h5>
          <p class="card-text text-primary">Fundacion canina</p>
        </div>
      </div>
    <?php
      if ($interes == true) {
        echo '
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="d-block w-100" src="n1.jpg" alt="" class="d-block w-50 rounded mx-auto width="200" height="200"" /><br />>
              </div>
              <div class="carousel-item">
                  <img class="d-block w-100" src="n2.jpg" alt="" class="d-block w-50 rounded mx-auto width="200" height="200"" /><br />>
              </div>
              <div class="carousel-item">
                  <img class="d-block w-100" src="n3.jpg" alt=""class="d-block w-50 rounded mx-auto width="200" height="200"" /><br /> >
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
          </div>';
      }
      else {

      }
    ?>
  </footer>
</html>