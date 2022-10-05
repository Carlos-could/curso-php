<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // 1 - xml file path
    $path = "includes/cds.xml";

    // 2 - Read entire file into string
    $xmlfile = file_get_contents($path);

    // 3 - Convert xml string into an object
    $new = simplexml_load_string($xmlfile);

    // 4 - Convert into json
    $con = json_encode($new);

    // 5 - Convert into associative array
    $newArr = json_decode($con, true);

    $x = json_encode($newArr['CD']);
    $a = json_decode($x, true);

    //--------------------------------------
    $respuesta = [ ['descripcion' => 'IPhone X','unidad_de_medida'=>'standard','codigo'=>'07739340'],
  	 		           ['descripcion' => 'Spectre x360','unidad_de_medida'=>'standard','codigo'=>'52932406'],
  	 		           ['descripcion' => 'Mac AirBook','unidad_de_medida'=>'standard','codigo'=>'34807601']];
    echo '<pre>';
      print_r($respuesta);
    echo '</pre>';

    echo '<pre>';
      print_r($a);
    echo '</pre>';



     ?>



    <script >



    </script>
  </body>
</html>
