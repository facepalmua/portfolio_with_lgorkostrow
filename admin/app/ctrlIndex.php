<?php

class ctrlIndex extends ctrl {
	
	
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
		$this->messages = $this->db->query("SELECT * FROM messages WHERE active= ? ORDER BY id DESC",1)->all();
		$this->out('message.php');
		
	}
	
	function del($id) {
		if (!$this->user) return header("Location: /");
		
		$this->db->query("DELETE FROM post WHERE id = ?",$id);
		header("Location: /");
	}
	
	
}