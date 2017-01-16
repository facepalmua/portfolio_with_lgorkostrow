<?php
    class ctrl {
        public function __construct() {
            include("../../admin/lib/db.php");
            $this->db = new db();    
        }
        public function send(){
            $name = addslashes(trim($_POST["name"]));
            $mail = addslashes(trim($_POST["mail"]));
            $text = addslashes(trim($_POST["text"]));
            
            $this->db->query("INSERT INTO messages(name,email,text,datetime) VALUES(?,?,?,NOW())",$name, $mail,$text);
        }

    }
    $send = new ctrl();
    $send->send();
        
?>