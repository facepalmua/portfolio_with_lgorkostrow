<?php
    class messages {
        public function __construct() {
            include("db.php");
            $this->db = new db();
        }

        public function send(){
            $name = addslashes(trim($_POST["name"]));
            $mail = addslashes(trim($_POST["mail"]));
            $text = addslashes(trim($_POST["text"]));

            $this->db->query("INSERT INTO messages(name,email,text,datetime) VALUES(?,?,?,NOW())",$name, $mail, $text);
        }

        public function check_messages(){
            $result = $this->db->query("SELECT * FROM messages WHERE active= ? ",1)->num();
            echo $result;

        }

        public function read_message(){
            $id = trim($_POST["id"]);

            $this->db->query("UPDATE messages SET active='0' WHERE id = ?",$id);

        }

        public function delete_message(){
            $id = trim($_POST["id"]);
            echo"";
            $this->db->query("DELETE FROM messages WHERE id = ?",$id);

        }


    }
    $messages = new messages();
    $action = trim($_GET["action"]);

    switch ($action) {
        case 'send':
            $messages->send();
            break;

        case 'check':
            $messages->check_messages();
            break;

        case 'read':
            $messages->read_message();
            break;

        case 'delete':
            $messages->delete_message();
            break;


        default:
            # code...
            break;
    }
?>
