<?php
include "dbconfig.php";
  if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$name','$email','$password')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "You are already registered.";
      header('Location: login.php');
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    }
    $conn->close();
  }
?>