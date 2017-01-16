<?php
    class messages {
        public function __construct() {
            include("db.php");
            $this->db = new db();    
        }
        public function check_messages(){
            $q = 1;
            $result = $this->db->query("SELECT * FROM messages WHERE active= ? ",1)->num();
            echo $result;
            //$f = implode("/", $result);
            //echo  var_dump($result);

        }

    }
    $check_messages = new messages();
    $check_messages->check_messages();
        
?>