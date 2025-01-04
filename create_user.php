<?php
include_once('./config.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['register'])){
  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $email = $_POST['email']; 
  $phonenumber = $_POST['phonenumber'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];

  $password_hash = password_hash($password, PASSWORD_BCRYPT);
  $role = 0;


  $sql = "INSERT INTO users(fullname, username, email, password, gender, phonenumber, role) values (:fullname, :username, :email, :password, :gender, :phonenumber, :role)";
  $sqlQuery = $connect->prepare($sql);

  $sqlQuery->bindParam(':fullname', $fullname);
  $sqlQuery->bindParam(':username', $username);
  $sqlQuery->bindParam(':email', $email);
  $sqlQuery->bindParam(':password', $password_hash);
  $sqlQuery->bindParam(':gender', $gender);
  $sqlQuery->bindParam(':phonenumber', $phonenumber);
  $sqlQuery->bindParam(':role', $role);

  if ($sqlQuery->execute()) {
      header("Location: login.php");
      exit();
  } else {
      echo "Registration failed!";
      header("Location: signup.php");
      exit();
  }
}
?>
