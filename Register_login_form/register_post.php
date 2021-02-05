<?php
require ('database.php');
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['pwd'];
  ///name field validation
if (empty($name)) {
  $_SESSION['name']="required your name";
  header('location:register.php');
}

else {
  // echo $name=$_POST['name'];
}
//email field validaton
if(empty($email)){
  $_SESSION['email']="email field is required";
  header('location:register.php');

}
else{
  if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
    // echo "valid your email";

  }
  else {
    $_SESSION['email']="email is not valid ";
    header('location:register.php');
  }
  // echo $email=$_POST['email'];

}
////////password field InvalidArgumentException
if(empty($password)){
  $_SESSION['password']="required your passsword";
  header('location:register.php');
}
else {
  // $plen=strlen($password=$_POST['pwd']);
  // if ($plen>8) {
  //   $_SESSION['password']="min 8 car";
  //   header('location:register.php');
  // }
  // else {
  //   if (filter_var($password,FILTER_VALIDATE_INT)) {
  //     echo "valid";
  //     // code...
  //   }
  //   else {
  //     echo "NO";
  //   }
  //   // code...
  // }
   // echo $password=$_POST['pwd'];
}
//database connection
$insert="INSERT INTO user_validate_data_registration_form (name,email,password_data)
VALUES('$name','$email','$password')";
$query=mysqli_query($database,$insert);
if ($query) {
  echo "REgistration succcessful";
  // code...
}
else {
  echo "Registration in not succcessful";
}



}


?>
