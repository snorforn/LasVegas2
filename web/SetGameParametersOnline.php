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



$Velocity=$_POST["Velocity"];
$Time=$_POST["Time"];
$ItemScore=$_POST["ItemScore"];
$Vitality=$_POST["Vitality"];
$Damage=$_POST["Damage"];
$idGame=1;


$sql = "update game set velocity_character='".$Velocity."',level_time='".$Time."',item_score='".$ItemScore."',vitality='".$Vitality."' ,enemy_damage='".$Damage."'  where id='".$idGame."'";

  $rs=pg_query( $conexion, $sql );

echo "<a href=\"javascript:history.go(-1)\">Volver</a>";

?>
