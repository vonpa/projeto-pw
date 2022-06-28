<?php

function connection(){
  $host = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname = "modular";

  $mysqli = mysqli_connect($host, $username, $password, $dbname);

  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
  
  return $mysqli;
}

