<?php
$mysqli = new mysqli("localhost", "root","", "notetakingwebsite");
//Check Connection
if($mysqli->connect_error)
{
  die("Connection failed: " . $msqli->connect_error);
}
?>
