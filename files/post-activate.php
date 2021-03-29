<?php
    require '../objects.php';

    $postId = $_GET['postId'];

    if(!isset($_SESSION['user'])){
        header('Location: ../index.php');
    }else{
        $post->postActivate($postId);
        header('Location: ../page-blog.php');
    }
?>