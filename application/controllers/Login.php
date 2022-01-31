<?php

class Login extends CI_Controller {

    public function index(){
		$this->load->view('login');
    }

	public function aksi_login(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$cek = $this->Mlogin->cek_login($u, $p);
		$lvl = $cek->row();
		if ($cek->num_rows() == 1){
			$data_session = array(
				'user_id' => $lvl->user_id,
				'username' => $u,
				'nama' => $lvl->nama,
				'level' => $lvl->level,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('notif','ylog');
			if($this->session->userdata('level') == 'Admin'){
				redirect('a');
			}else{
				redirect('POS');
			}
		} else {
			$this->session->set_flashdata('notif','xlog');
			redirect(base_url());
		}
	}

	public function regist(){
		$this->load->view('regist');
	}

	public function y_regist(){
		$nama = $this->input->post('nama');
		$uname = $this->input->post('username');
		$p1	= $this->input->post('password1');
		$p2 = $this->input->post('password2');
		
		$cek_u = $this->Mlogin->cek_reg($uname)->row();
		if ($p1 != $p2) {
			$this->session->set_flashdata('notif','xpass');
			redirect('register');
		}else {
			if ($cek_u != 0) {
				$this->session->set_flashdata('notif','xada');
				redirect('register');
			}else{
			$datainsert = array(
				'nama' => $nama,
				'username' => $uname,
				'passwd' => $p1,
				'level' => 'Kasir'
			);
			$this->Mlogin->insert($datainsert);
			$this->session->set_flashdata('notif','yreg');
			redirect(base_url());
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}