<?php

class Mlogin extends CI_Model{

	public function cek_login($u, $p){
		$q = $this->db->get_where('user', array('username' => $u, 'passwd' => $p));
		return $q;
	}

	public function cek_user($u, $p){
		$q = $this->db->get_where('user', array('username' => $u, 'passwd' => $p));
		return $q;
	}

	public function lvl($where){
		return $this->db->get_where('user',array('username' => $where));
	}

	public function insert($data){
		$this->db->insert('user',$data);
	}

	public function cek_reg($d){
		return $this->db->get_where('user',array('username' => $d));
	}
}