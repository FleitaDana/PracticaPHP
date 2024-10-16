<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php


#Ejercicio 4
  echo "<h3>Ejercicio 4: Mensaje</h3>";

  function mostrarNumeroAleatorio() {
    // Generar un número aleatorio entre 1 y 100
    $num = rand(1, 100);
    
    // Mostrar el número generado
    echo "<p>El número generado es: <strong>$num</strong></p>";

    // Verificar si es menor, igual o mayor a 50
    if ($num < 50) {
        echo "<p>El número es menor a 50.</p>";
    } elseif ($num == 50) {
        echo "<p>El número es igual a 50.</p>";
    } else {
        echo "<p>El número es mayor a 50.</p>";
    }
}

mostrarNumeroAleatorio();

#Ejercicio 5

echo "<h3>Ejercicio 5: Tipos de variable</h3>";

  $dia = 10; //Se declara una variable de tipo integer.
  $sueldo = 10000.80; //Se declara una variable de tipo double.
  $nombre = "Dana"; //Se declara una variable de tipo string.
  $existe = true; //Se declara una variable boolean.
  echo "Variable entera:";
  echo $dia;
  echo "<br>";
  echo "Variable double:";
  echo $sueldo;
  echo "<br>";
  echo "Variable string:";
  echo $nombre;
  echo "<br>";
  echo "Variable boolean:";
  echo $existe;


  #Ejercicio 6

echo "<h3>Ejercicio 6: Variables de tipo string</h3>";

$precio1 = 1000;
$precio2 = 7000;
$precio3 = 8000;
echo "Hay modelos de collares importados de $precio1, $precio2 y $precio3";



  #Ejercicio 7

  echo "<h3>Ejercicio 7: If</h3>";

  echo "Numero aleatorio:";
  $num = rand(1, 3);
  if ($num == 1) {
    echo "uno";
  } else {
    if ($num == 2) {
      echo "dos";
    } else {
      echo "tres";
    }
  }


  #Ejercicio 8

  echo "<h3>Ejercicio 8: For - While - Do While</h3>";
function tablaMultiplicarFor(){
  echo "<h3>Estructuras repetitivas: Tabla de multiplicar</h3>";
  echo "Tabla de Multiplicar del 2 For";
  echo "<ul>";
  $resultado = 0;
  for($i = 1; $i <= 10; $i++){
      $resultado = 2 * $i;
      echo "<li>2 x $i = $resultado</li>";
  }
  echo "</ul>";  // Corregido el cierre de la lista
  echo "<br>";
}


tablaMultiplicarFor();

function tablaMultiplicarWhile(){
$f = 2;
echo "Tabla de Multiplicar del 2 While";
echo "<ul>";  // Abres la lista
while ($f <= 20) {
    echo "<li>$f</li>";  // Cada número en una nueva línea dentro de un <li>
    $f = $f + 2;
}
echo "</ul>";  // Cierras la lista
}

tablaMultiplicarWhile();

function tablaMultiplicarDoWhile(){
  echo "<br>";
  echo "Tabla de Multiplicar del 2 Do While";
  echo "<br>";
  echo "<ul>"; 
  $f = 2;
  do {
    echo "<li>$f</li>";
    $f = $f + 2;
  } while ($f <= 20);
  echo "</ul>";
}

tablaMultiplicarDoWhile();


  ?>

<!--Ejercicio 9-->

<h3>Ejercicio 9: Envío de datos de un FORMULARIO (controles text y submit)</h3>

<form method="post" action="pagina2.php">
    Ingrese el nombre:
    <input type="text" name="nombre" required>
    <br>
    Ingrese la edad:
    <input type="number" name="edad" required>
    <br>
    <input type="submit" value="Confirmar">
</form>


<h3>Ejercicio 10: FORMULARIO (control radio)</h3>

<form action="pagina2.php" method="post">
    Ingrese Nombre:
    <input type="text" name="nombre">
    <br>
    Estudios:
    <br>
    <input type="radio" name="radio1" value="sin">Sin estudios
    <br>
    <input type="radio" name="radio1" value="primario">Estudios primarios
    <br>
    <input type="radio" name="radio1" value="secundario">Estudios secundarios
    <br>
    <input type="submit" value="Confirmar">
  </form>


  <h3>Ejercicio 11: FORMULARIO (control checkbox)</h3>

  <form method="post" action="pagina2.php">
    Ingrese el nombre:
    <input type="text" name="nombre">
    <br>
    Deportes que practica:<br>
    <input type="checkbox" name="check1">Fútbol
    <br>
    <input type="checkbox" name="check2">Basquet
    <br>
    <input type="checkbox" name="check3">Tenis
    <br>
    <input type="checkbox" name="check4">Voley
    <br>
    <input type="submit" value="confirmar">
  </form>

  <h3>Ejercicio 11: FORMULARIO (control Select)</h3>

  <form method="post" action="pagina2.php">
    Ingrese el nombre:
    <input type="text" name="nombre">
    <br>
    Seleccione en que rango se ubica sus ingresos:
    <select name="ingresos">
      <option value="1">1-1000</option>
      <option value="2">1001-3000</option>
      <option value="3">>3000</option>
    </select>

    <br>
    <input type="submit" value="confirmar">
  </form>

</body>

</html>