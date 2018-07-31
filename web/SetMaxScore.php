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


$userName=$_POST["userNamePost"];
$MaxScore=$_POST["max_score"];

  $sql = "update game_data set score='".$MaxScore."' where email='".$userName."'";
                                   // Ejecutamos la consulta (se devolverá true o false):
  $rs=pg_query( $conexion, $sql );


?>
