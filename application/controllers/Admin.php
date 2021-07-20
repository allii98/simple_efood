<?php
  class Admin extends CI_Controller{

   public function __construct()
   {
     parent::__construct();
     $this->load->library('form_validation');
     
    $this->load->model('Join_m', '', TRUE);
      if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
 }
  

   public function index()
    {
    $data['judul'] = 'Halaman Admin';
    $data['barang'] = $this->Model_barang->tampil_data();
    // $this->load->view('templates/admin_header',$data);
    $data['pageTitle'] = 'Dashboard'; 
    $data['pageContent'] = $this->load->view('admin/dashboard', $data, TRUE);

     $this->load->view('temp/layoutadm', $data);
    // $this->load->view('templates/footer');
    }

    public function tambah()
    {
      $data['judul'] = 'Tambah Data';
      $data['barang'] = $this->Model_barang->tampil_data();
      
      $this->form_validation->set_rules('nama_brg', 'Nama barang', 'required');
      $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
      $this->form_validation->set_rules('kategori', 'Kategori', 'required');
      $this->form_validation->set_rules('harga', 'Harga barang', 'required|numeric');
      $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');

      
      

      if($this->form_validation->run() == FALSE){
         $data['pageTitle'] = 'Masukan Data Makanan'; 
          // $this->load->view('templates/admin_header',$data);
          $data['pageContent'] = $this->load->view('admin/tambah', $data, TRUE);
          $this->load->view('temp/layoutadm', $data);
          // $this->load->view('templates/footer');
      }else{
        $this->Model_barang->tambahDataBarang();
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect('admin');
      }
    }
    
    public function hapus($id)
    {
      $this->Model_barang->hapusBarang($id);
      $this->session->set_flashdata('flash_hapus','Dihapus');
      redirect('admin');
    }

     public function hapuspesan($id)
    {
      $this->Model_pesan->hapusPesan($id);
      $this->session->set_flashdata('flash_hapus','Dihapus');
      redirect('admin/rekap');
    }



    
    public function update($id)
    {
      $data['judul'] = 'Ubah Data';
      $data['barang'] = $this->Model_barang->getAllDataById($id);

      $this->form_validation->set_rules('nama_brg', 'Nama barang', 'required');
      $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
      $this->form_validation->set_rules('kategori', 'Kategori', 'required');
      $this->form_validation->set_rules('harga', 'Harga barang', 'required|numeric');
      $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
      $this->form_validation->set_rules('gambar', 'Gambar', 'required');

      if($this->form_validation->run() == FALSE){
          $data['pageTitle'] = 'Edit data Makanan'; 
          // $this->load->view('templates/admin_header',$data);
           $data['pageContent'] = $this->load->view('admin/ubah', $data, TRUE);
          // $this->load->view('templates/footer');
          $this->load->view('temp/layoutadm', $data);
      }else{
        $this->Model_barang->ubah_data();
        $this->session->set_flashdata('flash_ubah','Diubah');
        redirect('admin');
      }
    }



    public function updatepesan($id)
    {
      $data['judul'] = 'Ubah Data Pesan';
      $data['pesan'] = $this->Join_m->getAllDataById($id);

      $this->form_validation->set_rules('nama_brg', 'Nama barang', 'required');
       $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
      $this->form_validation->set_rules('harga', 'Harga barang', 'required|numeric');

      if($this->form_validation->run() == FALSE){
          $data['pageTitle'] = 'Edit data Pesanan'; 
          // $this->load->view('templates/admin_header',$data);
           $data['pageContent'] = $this->load->view('admin/ubahpesan', $data, TRUE);
          // $this->load->view('templates/footer');
          $this->load->view('temp/layoutadm', $data);
      }else{
        $this->Join_m->ubah_data();
        $this->session->set_flashdata('flash_ubah','Diubah');
        redirect('admin/rekap');
      }
    }

    public function invoice()
     {
       $data['judul'] = 'Invoice';
       $data['invoice'] = $this->Model_invoice->tampil_data();
       // $this->load->view('templates/admin_header',$data);

       $data['pageContent'] = $this->load->view('admin/invoice',$data);
       // $this->load->view('templates/footer');
       $this->load->view('temp/layoutadm', $data);
     }


public function rekap()
 {
  $data['pageTitle'] = 'Data Pesanan Masuk'; 

    // query memanggil function duatable di model
    $data['join2'] = $this->Join_m->duatable(); 
  // $this->load->view('templates/header');
  // $this->load->view('templates/sidebar');
  $data['judul'] = 'Daftar Pesanan';
  $data['pageContent'] = $this->load->view('admin/viewpesanan', $data, TRUE);
  $this->load->view('temp/layoutadm', $data);
  // $this->load->view('templates/footer');    
  
 } 

  }// akhir class
  
    
   
?>

