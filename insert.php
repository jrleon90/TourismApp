<?php
 define('HOST','localhost');
 define('USERNAME', 'root');
 define('PASSWORD','joser8425');
 define('DB','Tourism_App');

 	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);

  $email = $_POST['EMAIL'];
if ($email != null && filter_var($email, FILTER_VALIDATE_EMAIL)){
  $sql = "insert into users_app (email) values ('$email')";

if(mysqli_query($con, $sql)){
echo 'success';
}
}
?>
