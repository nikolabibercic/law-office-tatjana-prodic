<?php
    require '../objects.php';

    $postId = $_GET['postId'];

    if(!isset($_SESSION['user'])){
        header('Location: ../index.php');
    }else{
        $post->postDeactivate($postId);
        header('Location: ../page-blog.php');
    }
?>