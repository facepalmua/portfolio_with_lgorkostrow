<?php
    class messages {
        public function __construct() {
            include("db.php");
            $this->db = new db();    
        }
        public function read_message(){
            $id = trim($_POST["id"]);
        
            $this->db->query("UPDATE messages SET active='0' WHERE id = ?",$id);

        }

    }
    $messages = new messages();
    $messages->read_message();
        
?>