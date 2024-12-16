<?php
require("connection.php");
if(isset($_POST["btn_registered"]))
{
   $name = $_POST["name"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $select   = "SELECT * FROM `registered` WHERE `Email` = '$email'";
   $data =  mysqli_query($connection,$select);
   if(mysqli_num_rows($data)> 0)
   {
      header("location: Registered.php?error=Email already registered");
   }else{
      $query = "INSERT INTO `registered`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$password')";
      mysqli_query($connection,$query);
      header("location: Login.php");
      exit();
   }


}

session_start();
if(isset($_POST["btn_login"]))
{
   $email = $_POST["email"];
   $password = $_POST["password"];
   $select = "SELECT * FROM `registered` WHERE Email = '$email' And Password = '$password'";
   $data =  mysqli_query($connection,$select);
   if(mysqli_num_rows($data)> 0){
      $_SESSION["emaill"] = $email;
      header("location: welcome.php");
   }else{
      header("location: login.php?error=Email or Password is incorrect");
   }
}



?>