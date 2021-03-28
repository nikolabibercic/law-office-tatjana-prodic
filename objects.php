<?php
    session_start();
    
    require 'classes/Connection.php';
    require 'classes/ConnectionBuilder.php';
    require 'classes/User.php';
    require 'classes/Post.php';

    $conn = new Connection();
    $user = new User($conn->connect());
    $post = new Post($conn->connect());
?>