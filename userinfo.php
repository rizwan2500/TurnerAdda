<?php

$con = mysqli_connect('localhost','root');
if($con){
	echo "Connecion Successful";
}else{
	echo "Bad request";
}


  mysqli_select_db($con, 'turneruserdata');

   $user = $_POST['user'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $sugest = $_POST['sugest'];
 
  $query = " insert into userinfodata (user, email, mobile, sugest) 
  values ('$user', '$email', '$mobile', '$sugest') ";

  mysqli_query($con, $query);

  header('location:index.php');

 ?>