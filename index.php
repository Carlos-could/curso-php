<?php
include 'includes/header.php';
  $hora = 8;

  if ($hora>8.1) {
    echo "<h5>Hola buenos dias</h5>";
  }else {
    echo "<h5>Hola buenas noches</h5>";
  }

  $frutas = array("platano","manzana","fresa");

  print_r($frutas);



  echo "<br>";
  echo $frutas[2];

  for ($i=0; $i < count($frutas); $i++) {
    echo "<h5>$frutas[$i]</h5>";
  }

  $edades = array("Marco"=>50, "Tania"=>25, "Carlos"=>55);

  print_r ($edades);

  echo "<br>";

  echo $edades['Tania'];

  foreach ($edades as $key => $value) {
    echo $key . "tiene el valor " . $value."<br>";
  }

  echo "perra";

  include 'includes/footer.php';
