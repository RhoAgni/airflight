<?php
session_start();
include "config.php";
if(isset($_SESSION['email'])){
    session_destroy();
    header('Location: index.php');
}
?>
