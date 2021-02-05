<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="form-handaling1.php" mathod="POST">
      <input type="text" name="nihad">
      <input type="submit"  value="submit">


    </form>

  </body>
</html>


<!-- <?php

// echo "$_SERVER";
//server all information cheack
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
//server method check
print_r($_SERVER['REQUEST_METHOD']);
echo ".<br>";
//server url check
print_r($_SERVER['REQUEST_URI']);
echo ".<br>";
//server root get_included_files
print_r($_SERVER['DOCUMENT_ROOT']);
echo ".<br>";
print_r($_SERVER['PATH']);
?> -->

<?php
session_start();
$_SESSION['text']="Welcome to our page";

print_r ($_SESSION['nihad']);
session_distroy();
?>
