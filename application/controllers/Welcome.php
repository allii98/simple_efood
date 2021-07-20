<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  

  public function __construct()
   {
     parent::__construct();
     $this->load->library('form_validation');
     
    $this->load->model('Join_m', '', TRUE);
      
        }

public function index()
	{
		
        $this->load->view('login');
         // $this->session->unset_userdata('username');
         //    $this->session->unset_userdata('nama');
         
	}
	

	private function atur()
	{
		return [
			['field' => 'username', 'label' => 'Username', 'rules' => 'required|is_unique[user.username]'],
			['field' => 'password', 'label' => 'Password', 'rules' => 'required'],
			['field' => 'nama', 'label' => 'Nama', 'rules' => 'required'],
			['field' => 'no_telp', 'label' => 'No_telp', 'rules' => 'required'],
			['field' => 'level', 'label' => 'Level', 'rules' => 'required']
		];
	}

	public function newakun()
	{
		$this->form_validation->set_rules($this->atur());

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('login/adduser');
		} else {
			$data['username'] = $this->input->post('username');
			$data['password'] = sha1($this->input->post('password'));
			$data['nama'] = $this->input->post('nama');
			$data['no_telp'] = $this->input->post('no_telp');
			$data['level'] = $this->input->post('level');

                //akhir upload

			$this->Model_user->insert($data);
			$this->session->set_flashdata('pesan', '<script>alert("Akun berhasil dibuat")</script>');
			redirect(base_url(''));
		}


    }
		
}

