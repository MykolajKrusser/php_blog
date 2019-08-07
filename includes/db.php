<?php
  require_once("config.php");
  $connection = mysqli_connect(
    $config["db"]["server"],
    $config["db"]["username"],
    $config["db"]["pasword"],
    $config["db"]["name"],
  );
  if ($connection == false){
    echo mysqli_connect_error();
    exit();
  };