<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('login_model');
  //       if($this->session->userdata('status') != "login"){
  //           redirect(base_url("login"));
		// }
		//Do your magic here
	}

	 public function proses()
    {
                //set form validation
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = sha1($this->input->post('password', TRUE));

                //checking data via model
                $checking = $this->login_model->check_login('user', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'id_user'   => $apps->id_user,
                            'username' => $apps->username,
                            'password' => $apps->password,
                            'nama' => $apps->nama,
                            'no_telp' => $apps->no_telp,
                            'level'      => $apps->level,
                            'status' => "login"
                        );

                         $this->session->set_userdata('masuk',TRUE);
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("level") == "admin"){
                            redirect('admin');
                        }
                        else if($this->session->userdata("level") == "user"){
                            
                            redirect('guest');

                        }

                        // else if($this->session->userdata("level") == "siswa"){
                        //     redirect('sis/siswaa');
                        // }
                        // else if($this->session->userdata("level") == "ortu"){
                        //     redirect('ort/ortuu');
                        // }

                    }
                }


                else
                {
                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('login', $data);

                }

            }

            else
            {
                            $this->load->view('login');
            }

        

    }


    function logout(){
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('nama');
            $this->cart->destroy();
            redirect('');
        }

}
