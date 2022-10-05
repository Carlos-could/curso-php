<?php
//declare(strict_types=1);
include 'includes/header.php';


function sumar($valor1=0,  $valor2)
{
  $resultado = $valor1 + $valor2;
  echo "<h5>$resultado</h5>";
}
sumar(2,4);



include 'includes/footer.php';
