<!DOCTYPE html>
<html>
    <head>
    <title>cuento de perritos</title>
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
    </head>
    <body>
    <h1 style="text-align:center;">cuento de perritos </h1>

     <?php
     // Párrafo 1
      $parrafo1 = "<p style='font-family: Verdana, sans-serif; font-size: 20px;'>Una vez en un tranquilo vecindario, un grupo de adorables perritos llamados Max, Bella y Toby.
      Max era un perrito travieso y juguetón, siempre lleno de energía. Bella, en cambio, era una perrita tierna y cariñosa que le 
      encantaba dar lametones y recibir abrazos. Toby, el más pequeño de todos, era curioso y valiente, siempre dispuesto a explorar nuevos lugares.<br>
      <br>
      
      Un soleado día de verano, los tres perritos decidieron aventurarse más allá de los límites de su patio trasero. Juntos, saltaron la cerca y se adentraron
      en el colorido parque cercano. Allí, descubrieron un mundo lleno de mariposas revoloteando, flores de vivos colores y árboles altos que proporcionaban sombra fresca.<br>
      <br>
      Max, con su cola enérgicamente moviéndose, correteaba tras las mariposas, saltando y girando en el aire. Bella se acercaba a las 
      personas que paseaban por el parque, buscando cariño y alegrando a todos con su dulzura. Toby, curioso como siempre, exploraba cada rincón, husmeando en los 
      arbustos y persiguiendo pequeños insectos.<br>
      <br>
      A medida que el día avanzaba, los perritos se cansaban y decidieron regresar a casa. Corrieron de regreso al patio trasero, contentos y satisfechos 
      con su emocionante aventura. Se acurrucaron juntos bajo la sombra de un árbol y se quedaron dormidos, soñando con nuevas travesuras y momentos felices.<br>
      <br>
      Y así, Max, Bella y Toby vivieron muchas más aventuras juntos, siempre descubriendo la belleza del mundo a su alrededor y llenando los 
      corazones de todos con su amor y alegría. <br></p>";
     // Imprimir los párrafos
     echo $parrafo1;
     ?>
     <?php
     $directorio = "cuento.jpg";
       $imagenes = glob($directorio);
        foreach ($imagenes as $imagen) {
            echo '<img src="' . $imagen . '" alt="" class="rounded" width="304" height="236"" /><br />';
          }
    ?>


</body>
</html>