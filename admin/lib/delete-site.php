<?php
    class site {
        public function __construct() {
            include("db.php");
            $this->db = new db();    
        }
        public function delete_site(){
            $id = trim($_POST["id"]);
        
            $this->db->query("DELETE FROM site WHERE id = ?",$id);
            
        }

    }
    $site = new site();
    $site->delete_site();
        
?>