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
        public function selectActivePosts(){
            $sql = "select * 
                    from posts p
                    inner join sf_post_status ps on ps.post_status_id = p.post_status_id
                    where p.post_status_id = 1; ";
            $query = $this->conn->prepare($sql);
            $query->execute();
            
            $posts = $query->fetchAll(PDO::FETCH_OBJ);

            return $posts;
        }
        public function selectAllPosts(){
            $sql = "select * 
                    from posts p
                    inner join sf_post_status ps on ps.post_status_id = p.post_status_id ";
            $query = $this->conn->prepare($sql);
            $query->execute();
            
            $posts = $query->fetchAll(PDO::FETCH_OBJ);

            return $posts;
        }
        public function postActivate($postId){
            $sql = "update posts 
                    set post_status_id = 1
                    where post_id = $postId;
                    ";
            $query = $this->conn->prepare($sql);
            $query->execute();
        }
        public function postDeactivate($postId){
            $sql = "update posts 
                    set post_status_id = 2
                    where post_id = $postId;
                    ";
            $query = $this->conn->prepare($sql);
            $query->execute();
        }
    }
?>