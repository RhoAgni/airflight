<!-- LOGIN -->
<?php
session_start();
include "config.php";

if(isset($_POST['l_submit'])){

    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['psw']);

    if ($email != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from utente where email='".$email."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['email'] = $email;
            header('Location: index.php');
        }else{
            echo "Email e password non validi";
        }
    }
  }
 ?>
