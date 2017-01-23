<?php

class ctrlIndex extends ctrl {

	function main(){
		$this->site_all = $this->db->query("SELECT * FROM site  ORDER BY id DESC")->all();
		$this->site_Landing = $this->db->query("SELECT * FROM site WHERE cat = 'Landing page' ORDER BY id DESC")->all();
		$this->site_shop = $this->db->query("SELECT * FROM site WHERE cat = 'Интернет магазин' ORDER BY id DESC")->all();
		$this->site_corp = $this->db->query("SELECT * FROM site WHERE cat = 'Корпоративный сайт' ORDER BY id DESC")->all();
		$this->site_cutaway = $this->db->query("SELECT * FROM site WHERE cat = 'Визитка' ORDER BY id DESC")->all();
		$this->out('main.php');
	}
	function stat() {

		//$this->posts = $this->db->query("SELECT * FROM post ORDER BY ctime DESC")->all();

		$this->out('stat.php');
	}


	function portfolio() {

		// if (!empty($_POST)) {
		// 	$user = $this->db->query("SELECT * FROM admin WHERE email = ? AND pass = ?",$_POST['mail'],md5($_POST['pass']))->assoc();
		// 	if ($user) {
		// 		$key = md5(microtime().rand(0,10000));
		// 		setcookie('uid', $user['id'], time()+86400*30, '/');
		// 		setcookie('key', md5($key), time()+86400*30, '/');
		// 		$this->db->query("UPDATE admin SET cookie = ? WHERE id = ?",$key,$user['id']);
		// 		//header("Location: /");
		// 	} else
		// 		$this->error = 'Неправильный емейл или пароль';
		// }
		$this->site = $this->db->query("SELECT * FROM site  ORDER BY id DESC")->all();
		$this->out('portfolio.php');
	}

	function message() {
		// if (!$this->user) return header("Location: /");

		// if (!empty($_POST)) {
		// 	$this->db->query("INSERT INTO post(title,post,ctime) VALUES(?,?,?)",htmlspecialchars($_POST['title']), $_POST['post'],time());
		// 	header("Location: /");
		// }
		$url = explode('/', $_SERVER['REQUEST_URI']);
		if ( isset($url[3]) && !empty($url[3])){
			$this->offset = $url[3]*6-6;
			$this->page = $url[3];
			$this->messages = $this->db->query("SELECT * FROM messages ORDER BY id DESC LIMIT 6  OFFSET $this->offset")->all();
		}
		else {
			$this->messages = $this->db->query("SELECT * FROM messages ORDER BY id DESC LIMIT 6 ")->all();
			$this->page = 1;
		}

		// $this->n = $this->db->query("SELECT * FROM messages ORDER BY id DESC")->num();
		$this->n = $this->db->query("SELECT id FROM messages")->num();
		$this->out('message.php');

	}

	function del($id) {
		if (!$this->user) return header("Location: /");

		$this->db->query("DELETE FROM post WHERE id = ?",$id);
		header("Location: /");
	}


}
