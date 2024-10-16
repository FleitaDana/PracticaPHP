<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php

  #Ejercicio 10

  echo $_POST['nombre'];
  echo "<br>";
  if ($_POST['edad'] >= 18) {
    echo "Es mayor de edad";
  } else {
    echo "No es mayor de edad";
  }

  #Ejercicio 11

  echo $_POST['nombre'];
  echo "<br>";
  if ($_POST['radio1'] == "sin") {
    echo "Sin estudios.";
  }
  if ($_POST['radio1'] == "primario") {
    echo "Estudios primarios.";
  }
  if ($_POST['radio1'] == "secundario") {
    echo "Estudios secundarios.";
  }

  #Ejercicio 12

  $cant = 0;
  if (isset($_POST['check1'])) {
    $cant++;
  }
  if (isset($_POST['check2'])) {
    $cant++;
  }
  if (isset($_POST['check3'])) {
    $cant++;
  }
  if (isset($_POST['check4'])) {
    $cant++;
  }
  echo $_POST['nombre'];
  echo " practica $cant deportes.";
  

  #Ejercicio 13

  echo $_POST['nombre'];  // Añadir el punto y coma
  if ($_POST['ingresos'] == 3) {
      echo " debe pagar impuestos.";
  } else {
      echo " no debe pagar impuestos a las ganancias.";
  }
  ?>

</body>

</html>