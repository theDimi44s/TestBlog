<?php

#Connect to DB

$connection = mysqli_connect(
  
$config['db']['server'],
$config['db']['username'],
$config['db']['password'],
$config['db']['name']


);

if( $connection == false) {
  echo 'Failed to connect db!';
  echo mysqli_error($connection);
  exit();
} 

?>