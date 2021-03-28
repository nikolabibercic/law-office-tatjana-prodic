<?php
    class Post extends ConnectionBuilder{
        
        public $postInserted = null;

        public function insertPost($header,$text,$image){
            $sql = "insert into posts values(null,'{$header}','{$text}','{$image}',1,CURRENT_TIMESTAMP())";
            $query = $this->conn->prepare($sql);
            $checkInsert = $query->execute();

            if($checkInsert){
                $this->postInserted = true;
                header('Location: ../page-blog.php');
            }else{
                $this->postInserted = false;
            }
        }
        public function selectPosts(){
            $sql = "select * from posts p
                    where post_status_id = 1; ";
            $query = $this->conn->prepare($sql);
            $query->execute();
            
            $posts = $query->fetchAll(PDO::FETCH_OBJ);

            return $posts;
        }
    }
?>