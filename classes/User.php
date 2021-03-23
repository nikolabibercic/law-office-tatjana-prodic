<?php
    class User extends ConnectionBuilder{
        
        public $userLogged = null;

        public function loginUser($email,$password){
            $sql = "select * from users u
                    where   u.email = '$email'
                            and u.password = '$password'
                    ";
            $query = $this->conn->prepare($sql);
            $query->execute();

            $checUserLogIn = $query->fetch(PDO::FETCH_OBJ);

            if($checUserLogIn != null){
                $this->userLogged = true;
                $_SESSION['user'] = $checUserLogIn;

                header("Location: ../page-log-in.php?userLogged={$this->userLogged}");
            }else{
                $this->userLogged = false;
                header("Location: ../page-log-in.php?userLogged={$this->userLogged}");
            }
        }
    }
?>