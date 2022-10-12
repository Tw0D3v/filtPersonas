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
  array('nombre'=>'Leire Sebastián Barceló','edad'=> 41,'genero'=>'f'),
  array('nombre'=> 'Ciro Vilanova Bautista', 'edad'=>36,'genero'=>'f'),
  array('nombre'=>'Gertrudis Pino','edad'=>67,'genero'=>'f'),
  array('nombre'=> 'Raquel Barroso Maldonado','edad'=>35,'genero'=>'f'),
  array('nombre'=> 'Carmen jurado','edad'=>14,'genero'=>'f'),
  array('nombre'=>'Serafina Villena Gaya','edad'=>15,'genero'=>'f'),
  array('nombre'=>'Emigdio Cuadrado Ríos','edad'=>56,'genero'=>'m'),
  array('nombre'=>'lupe julia casas','edad'=>18,'genero'=>'f'),);

  $mujeres = array();
  $hombres = array();


 
foreach($personas as $persona){
    if($persona['genero'] == 'm'){
      array_push($hombres,$persona);  
    }
  }

 foreach($personas as $persona){
    if($persona['genero'] == 'f'){
      array_push($mujeres,$persona);
    }
  }

echo "<h1>Mujeres mayores a 35</h1>";
$filEdadMujres= array_filter($mujeres, function($MujerEdad) {
  if($MujerEdad["edad"] > 35){
  echo  "<strong> Nombre : </strong> {$MujerEdad['nombre']}";   
  echo "<br>";
  }
  return;
});


echo "<h1>Hombres mayores a 35</h1>";
$filEdadHombres = array_filter($hombres, function($HombreEdad) {
  if($HombreEdad["edad"] > 35){
    echo "<strong> Nombre : </strong> {$HombreEdad['nombre']}  <strong> Edad</strong> : {$HombreEdad['edad']}";   
  echo "<br>";
  }
  return;
});



    ?> 

    <!--s
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    

    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>