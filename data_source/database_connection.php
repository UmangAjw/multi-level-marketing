<?php

$host_name = 'localhost';
$database_name = 'db_mlm';
$username = 'root';
$password = '';

try {

  $conn = new PDO("mysql:host=$host_name; dbname=$database_name", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo "Fail to connect to the database ".$e->getMessage();

}

?>
