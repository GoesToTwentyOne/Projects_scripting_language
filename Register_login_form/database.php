<?php
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DATABASE','form_validation_system_data');
$database=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
if(!$database){
  echo "failed to connected";
}
else{
  echo " connected";
}
 ?>
