<?php
    class site {
        public function __construct() {
            include("db.php");
            $this->db = new db();
        }

        public function uploadfiles(){
            $data = array();

            $error = false;
            $files = array();

            $uploaddir = '../../uploads/'; // . - текущая папка где находится submit.php

            if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );

            foreach( $_FILES as $file ){
                if( move_uploaded_file( $file['tmp_name'], $uploaddir . basename($file['name']) ) ){
                    $files[] = realpath( $uploaddir . $file['name'] );
                }
                else{
                    $error = true;
                }
            }

            $data = $error ? array('error' => 'Ошибка загрузки файлов.') : array('files' => $files );

        }

        public function add_site(){
            $img = trim($_POST["img"]);
            $site = addslashes(trim($_POST["site"]));
            $cat = addslashes(trim($_POST["cat"]));

            $this->db->query("INSERT INTO site(img,site,cat) VALUES(?,?,?)",$img, $site, $cat);

        }

        public function delete_site(){
            $id = trim($_POST["id"]);

            $this->db->query("DELETE FROM site WHERE id = ?",$id);

        }

        public function edit_site(){
            $id = trim($_POST["id"]);
            $img = trim($_POST["img"]);
            $site = addslashes(trim($_POST["site"]));
            $cat = addslashes(trim($_POST["cat"]));

            $this->db->query("UPDATE site SET img=?, site=?, cat=? WHERE id = ?",$img, $site, $cat, $id);

        }

    }

    $site = new site();
    $action = trim($_GET["action"]);

    switch ($action) {

        case 'uploadfiles':
            $site->uploadfiles();
            break;

        case 'add':
            $site->add_site();
            break;

        case 'delete':
            $site->delete_site();
            break;

        case 'edit':
            $site->edit_site();
            break;

        default:
            # code...
            break;
    }


?>
