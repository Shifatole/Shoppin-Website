<?php

 $con = mysqli_connect('localhost','root');
 
 if($con){
		echo "Connection successful";
 }else{
		echo"No Connection";
 } 
 
 mysqli_select_db($con, 'project');
 
 $name =  $_POST['name'];
 $phone = $_POST['phone'];
 $email =  $_POST['email'];
 $address = $_POST['address'];
 $state = $_POST['state'];
  $pin = $_POST['pin'];
 
 $query = " insert into address (name, phone, email, address, state, pin)
 values ('$name', '$phone', '$email' , '$address' , '$state' , '$pin') ";
 
 echo"$query";
 
 mysqli_query($con, $query );
 
 header('location:paymentoption.html');
 

 
 
 ?>
