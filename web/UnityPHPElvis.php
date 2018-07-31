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
$password=$_POST["passwordPost"];
$idGame=1;
$score=0;
//$userName="alejo";
//$password="alejo";


  $sql = "INSERT INTO player(email,pass) VALUES ('".$userName."', '".$password."')";
                                   // Ejecutamos la consulta (se devolverá true o false):
  pg_query( $conexion, $sql );

  $sql2 ="INSERT INTO game_data(email,id,score) VALUES ('".$userName."','".$idGame."','".$score."')";

  pg_query( $conexion, $sql2 );

?>
