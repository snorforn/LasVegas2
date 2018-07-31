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
//$userName="daniel";
//$password="daniel";
$userRequest="";
$passRequest="";

  $sql = "select p.email,p.pass,d.score from player p,game_data d where p.email='".$userName."' and p.pass='".$password."'";
                                   // Ejecutamos la consulta (se devolverá true o false):
  $rs=pg_query( $conexion, $sql );

  while ($row = pg_fetch_row($rs)) {
    $userRequest=$row[0];
    $passRequest=$row[1];
    $scoreRequest= $row[2];
  }

  if($userName==$userRequest && $password==$passRequest){
    $trueUser=$userRequest;
    $pass=$passRequest;
    $trueScore=$scoreRequest;
  }
  else {
    {
      $trueUser=$userName;
      $pass=$password;
        $trueScore=-1;
    }
  }

  echo "$trueUser/$pass/$trueScore";

?>
