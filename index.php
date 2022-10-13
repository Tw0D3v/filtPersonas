<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php

$personas = array(
  array('nombre' => 'Luis', 'edad' => 14, 'genero'=> 'm'),
  array('nombre'=> 'Modesto Alcalá', 'edad' => 37, 'genero'=>'m'),
  array('nombre'=>'Monica araujo', 'edad'=> 65, 'genero'=>'f'),
  array('nombre'=> 'Mauricio Coll Menendez','edad'=> 72,'genero'=>'m'),
  array('nombre'=> 'Milena Andrea', 'edad'=> 21,'genero'=>'f'),
  array('nombre'=>'Leire Sebastián Barceló','edad'=> 14,'genero'=>'f'),
  array('nombre'=> 'Ciro Vilanova Bautista', 'edad'=>36,'genero'=>'f'),
  array('nombre'=>'Gertrudis Pino','edad'=>67,'genero'=>'f'),
  array('nombre'=> 'Raquel Barroso Maldonado','edad'=>35,'genero'=>'f'),
  array('nombre'=> 'Carmen jurado','edad'=>15,'genero'=>'f'),
  array('nombre'=>'Serafina Villena Gaya','edad'=>14,'genero'=>'f'),
  array('nombre'=>'Emigdio Cuadrado Ríos','edad'=>56,'genero'=>'m'),
  array('nombre'=>'lupe julia casas','edad'=>18,'genero'=>'f'),);

  $mujeres = array();


 //foreach($personas as $persona){
   // if($persona['genero'] == 'f'){
     // array_push($mujeres,$persona);
  //  }
  //}

echo "<h1>Mujer de menor edad</h1>";
usort($mujeres, function($edadMujeres, $edad) {
	return $edadMujeres['edad'] > $edad["edad"] ? 1 : -1;
});
$minEdad = $mujeres[0]["edad"];

$filtradoEdades = array_filter($mujeres, function($edadComparar) use ($minEdad) {
	return $edadComparar["edad"] === $minEdad;
});

print_r($filtradoEdades);
echo "<br>";




    ?> 

    <!--s
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    

    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>