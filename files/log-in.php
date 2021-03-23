<?php
    require '../objects.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(isset($_SESSION['user'])){
        header('Location: ../index.php');
    }else{
        $user->loginUser($email,$password);
    }
?>