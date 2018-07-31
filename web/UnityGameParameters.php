<?php

$serverName="localhost";
$serverUserName="postgres";
$serverPassword="postgres";
$dataBase="postgres";

$conexion = pg_connect( "user=".$serverUserName." ".
                             "password=".$serverPassword." ".
                             "host=".$serverName." ".
                             "dbname=".$dataBase
                            ) or die( "Error al conectar: ".pg_last_error() );
$id_game=1;
$velocity=0;
$Level_time=0;
$item_score=0;
$vitality=0;
$Enemy_damage=0;

  $sql = "select * from game where id='".$id_game."'";
                                   // Ejecutamos la consulta (se devolverá true o false):
  $rs=pg_query( $conexion, $sql );

  while ($row = pg_fetch_row($rs)) {
    $velocity=$row[1];
    $Level_time=$row[2];
    $item_score= $row[3];
    $vitality= $row[4];
    $Enemy_damage= $row[5];
  }



  echo "$velocity/$Level_time/$item_score/$vitality/$Enemy_damage";

?>
