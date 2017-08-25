<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM demo "); //Recibe el fetch
							/*Self llama la instancia del objeto para 
							llegar al método getRows:

								class Collector extends dataBase
								{
						  			public static $db;  -->llama a este $db */	        
 
   echo "linea 1";
    $arrayDemo= array();  //SE crea el arreglo donde se guardaran los objetos demo      
    foreach ($rows as $c){ //Hace foreach de cada row del fetch de la base
      $aux = new Demo($c{'iddemo'},$c{'nombre'}); //Crea el nuevo objeto demo
      array_push($arrayDemo, $aux); 
    }
    return $arrayDemo; //Se lo envía a la página para que muestre
  }

//FUNCIÓN QUE MUESTRA SOLO L OJETOs

function showDemo($id){


  $row = self::$db->getRows("SELECT * FROM demo WHERE iddemo= ? ", array("{$id}"));
  $objDemo = new Demo($row[0]{'iddemo'}, $row[0]{'nombre'});

  return $objDemo;
}


function updateDemo($id, $nombre){
  $insertrow = self::$db->updateRow("UPDATE public.demo SET nombre = ? WHERE iddemo = ? ", array( "{$nombre}", $id));
}


}







?>

