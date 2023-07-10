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
<div class="container">  
    <form class="row g-3" method="post">
        <div class = "mt-3">
            <label for="num" class="mr-2">  Ingrese su numero de comienzo:</label>
            <input type="number" id="num" name="num" min="1" class="form-control mr-2">
            <input type="submit" value="Generar secuencia" class="btn btn-primary">
        </div>
    </form>
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        function fibonacci($num)
        {
            $num_1 = 0;
            $num_2 = 1;
            $i = 0;
            echo '<p class="mt-3">Secuencia de fibonacci:';
            while ($i <= $num) {
                echo "" . $num_1.",";
                $num_3 = $num_2 + $num_1;
                $num_1 = $num_2;
                $num_2 = $num_3;
                $i++;
            }
            echo "</p>";
        }
        fibonacci($num);
    }
    ?>
    </body>
</html>
