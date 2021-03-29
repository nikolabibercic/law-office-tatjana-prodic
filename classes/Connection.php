<?php
    class Connection {
        // public $host = 'localhost';
        // public $dbname = 'law_office';
        // public $username = 'root';
        // public $password = '';

        public $host = 'localhost';
        public $dbname = 'advokatp_law_office';
        public $username = 'advokatp_tatjanaprodic';
        public $password = 'slonovaca1.';

        public function connect(){
            try{
                return new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8",$this->username,$this->password);
            }
            catch(PDOException $e){
                echo 'Error'.$e->getMessage();
            }
        }
    }
?>