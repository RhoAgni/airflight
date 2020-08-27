<?php
session_start();
include "config.php";
if(isset($_POST['r_submit']))
{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $lname = mysqli_real_escape_string($con,$_POST['lname']);
    $age =  $_REQUEST['age'];
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['psw']);
    $r_password = mysqli_real_escape_string($con,$_POST['r_psw']);

    $sql_query = "SELECT count(*) as cntUser FROM utente WHERE email='$email'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);
    $count = $row['cntUser'];
      if($count == 0){
        if($password==$r_password){
          $password_crypted=md5(md5(md5($password)));
          $sql_query_2= "INSERT INTO utente (ID_utente, nome, password, cognome, data_nascita, admin, email) VALUES (NULL, '$name', '$password_crypted', '$lname', '$age', 0, '$email')";
          //$result2 = mysqli_query($con,$sql_query_2) or trigger_error("Query Failed! SQL: $sql_query_2 - Error: ".mysqli_error($conn), E_USER_ERROR);
          $_SESSION['email'] = $email;
          header('Location: index.php');
        }
        else{
            header('Location: index.php');

    }
  }
    else{
       header('Location: index.php');
  }
}
?>
