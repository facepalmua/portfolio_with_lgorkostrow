<?php
    class site {
        public function __construct() {
            include("db.php");
            $this->db = new db();    
        }
        public function add_site(){
            $img = trim($_POST["img"]);
            $site = addslashes(trim($_POST["site"]));
            $cat = addslashes(trim($_POST["cat"]));
            
            $this->db->query("INSERT INTO site(img,site,cat) VALUES(?,?,?)",$img, $site,$cat);

        }

    }
    $site = new site();
    $site->add_site();
        
?>