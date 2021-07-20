<?php
  class Akun extends CI_Controller{

   public function __construct()
   {
     parent::__construct();
     $this->load->library('form_validation');
 }
  

   public function index()
    {
    $data['judul'] = 'Halaman Kelola Akun';
    $data['userr'] = $this->Model_user->tampil_data();
    // $this->load->view('templates/admin_header',$data);
    $data['pageTitle'] = 'Input Data User'; 
    $data['pageContent'] = $this->load->view('admin/user', $data, TRUE);

     $this->load->view('temp/layoutadm', $data);
    // $this->load->view('templates/footer');
    }

    public function tambah()
    {
      $data['judul'] = 'Tambah Data';
      $data['userr'] = $this->Model_user->tampil_data();
      
      
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('no_telp', 'No_telp', 'required|numeric');
      $this->form_validation->set_rules('level', 'Level', 'required');
      

      if($this->form_validation->run() == FALSE){
         $data['pageTitle'] = 'Masukan Data Pengguna Baru'; 
          // $this->load->view('templates/admin_header',$data);
          $data['pageContent'] = $this->load->view('admin/tambahuser', $data, TRUE);
          $this->load->view('temp/layoutadm', $data);
          // $this->load->view('templates/footer');
      }else{
        $this->Model_user->tambah();
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect('akun');
      }
    }


    public function newakun()
    {
      $data['judul'] = 'Tambah Data';
      $data['userr'] = $this->Model_user->tampil_data();
      
      
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('no_telp', 'No_telp', 'required|numeric');
      $this->form_validation->set_rules('level', 'Level', 'required');
      

      if($this->form_validation->run() == FALSE){
         $data['pageTitle'] = 'Masukan Data Pengguna Baru'; 
          // $this->load->view('templates/admin_header',$data);
          $data['pageContent'] = $this->load->view('admin/tambahuser', $data, TRUE);
          $this->load->view('temp/layoutadm', $data);
          // $this->load->view('templates/footer');
      }else{
        $this->Model_user->tambah();
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect('Akun');
      }
    }
    


    public function hapus($id)
    {
      $this->Model_user->hapus($id);
      $this->session->set_flashdata('flash_hapus','Dihapus');
      redirect('akun');
    }

    
    public function update($id)
    {
      $data['judul'] = 'Ubah Data';
      $data['userr'] = $this->Model_user->getAllDataById($id);

      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('no_telp', 'No_telp', 'required|numeric');
      $this->form_validation->set_rules('level', 'Level', 'required');

      if($this->form_validation->run() == FALSE){
          $data['pageTitle'] = 'Edit Data User'; 
          // $this->load->view('templates/admin_header',$data);
           $data['pageContent'] = $this->load->view('admin/ubahuser', $data, TRUE);
          // $this->load->view('templates/footer');
          $this->load->view('temp/layoutadm', $data);
      }else{
        $this->Model_user->ubah_data();
        $this->session->set_flashdata('flash_ubah','Diubah');
        redirect('akun');
      }
    }
  }
