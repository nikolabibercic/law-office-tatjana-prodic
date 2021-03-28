<?php
    include "../objects.php";

    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        print_r($file);
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        $header = $_POST['header'];
        $text = $_POST['text'];

        $fileExt = explode('.',$fileName); //razdvajam string tamo gde je tacka i pravim niz
        $fileActualExt = strtolower(end($fileExt)); //izvlacim ekstenziju iz imena fajla
        
        $allawed = array('jpg','jpeg','png');

        if(in_array($fileActualExt,$allawed)){
            if($fileError===0){
                if($fileSize < 30000000){
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = '../uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    $post->insertPost($header,$text,$fileNameNew);
                }else{
                    echo 'Your file is too big';
                }
            }else{
                echo 'There was an error uploading your file!';
            }
        }else{
            echo 'You can not upload files of this type!';
        }
    }else {
        echo 'false';
    }
?>