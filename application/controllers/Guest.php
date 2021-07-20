<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {


	public function index()
	{
		// $data['judul'] = 'Selamat Datang';
		$data['barang'] = $this->Model_barang->tampil_data();
		// $this->load->view('temp/header',$data);
		// $this->load->view('temp/sidebar');
		// $this->load->view('home',$data);
		// $this->load->view('temp/footer');
		$data['pageTitle'] = 'Welcome';                
        $data['pageContent'] = $this->load->view('home', $data, TRUE);

        $this->load->view('temp/layout', $data);
	}

	public function tambah_keranjang($id)
	{
		$barang = $this->Model_barang->find($id);
		$data = array(
			'id'      => $barang->id_brg,
			'qty'     => 1,
			'price'   => $barang->harga,
			'name'    => $barang->nama_brg,
		);

		$this->cart->insert($data);	
		redirect('guest');
	}

	public function keranjang()
	{
		$data['pageTitle'] = 'keranjang';  
		// $data['judul'] = 'Belanjaan Anda';
		// $this->load->view('templates/header',$data);
		// $this->load->view('keranjang');


        $data['pageContent'] = $this->load->view('keranjang', $data, TRUE);

        $this->load->view('temp/layout', $data);
		// $this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{

		$this->Model_invoice->hapuspesan($id);
		$this->cart->destroy();
		redirect('guest');
	}

	public function bayar()
	{
		$data['pageTitle'] = 'keranjang'; 
		// $data['judul'] = 'Pembayaran';
		// $this->load->view('templates/header',$data);
		$data['pageContent'] = $this->load->view('bayar', $data, TRUE);
		// $this->load->view('templates/footer');
	

         $this->load->view('temp/layout', $data);
	}

	public function proses_pembayaran()
	{	
		$is_proses = $this->Model_invoice->index();
		if($is_proses){
			$this->cart->destroy();
			$data['pageTitle'] = 'Pembayaran';
			// $data['judul'] = 'Proses Pembayaran';
			// $this->load->view('templates/header',$data);
			$data['pageContent'] = $this->load->view('proses_pembayaran', $data, TRUE);
			
			// $this->load->view('templates/footer');
			 $this->load->view('temp/layout', $data);

		}else{
			echo "Maaf pesanan anda gagal kami proses";
		}
	}
		
}

