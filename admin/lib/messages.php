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

        }

        public function read_message(){
            $id = trim($_POST["id"]);

            $this->db->query("UPDATE messages SET active='0' WHERE id = ?",$id);

        }


    }
    $messages = new messages();
    $action = trim($_GET["action"]);

    switch ($action) {

        case 'check':
            $messages->check_messages();
            break;

        case 'read':
            $messages->read_message();
            break;

        case 'delete':
            $site->delete_site();
            break;

        default:
            # code...
            break;
    }
?>
