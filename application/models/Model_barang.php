<?php
  class Model_barang extends CI_Model{
    public function tampil_data()
    {
      return $this->db->get('tbl_barang')->result_array();
    }

    public function tambahDataBarang()
    {
      // $data = [
      //   "nama_brg" => $this->input->post('nama_brg',true),
      //   "keterangan" => $this->input->post('keterangan',true),
      //   "kategori" => $this->input->post('kategori',true),
      //   "harga" => $this->input->post('harga',true),
      //   "stok" => $this->input->post('stok',true),  
      //   "gambar" => $this->input->post('gambar',true),

      // ];


      $data['nama_brg'] = $this->input->post('nama_brg');
      $data['keterangan'] = $this->input->post('keterangan');
      $data['kategori'] = $this->input->post('kategori');
      $data['harga'] = $this->input->post('harga');
      $data['stok'] = $this->input->post('stok');

      //memulai upload
        $config['upload_path']          = './uploade/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 3000;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;
        $config['encrypt_name']     = FALSE;
        $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('gambar'))
                {
                       // $error = array('error' => $this->upload->display_errors());
                      echo $this->upload->display_errors();
                        //$this->load->view('upload_form', $error);
                }
                else
                {
                      
                        $namafile = $this->upload->data();
                        $data['gambar'] = $namafile['file_name'];
                        //$this->load->view('upload_success', $data);
                }

      $this->db->insert('tbl_barang', $data);
    }

    public function hapusBarang($id)
    {
      $this->db->delete('tbl_barang',['id_brg' => $id]);
    }

    public function getAllDataById($id)
    {
      return $this->db->get_where('tbl_barang',['id_brg' => $id])->row_array();
    }

    public function ubah_data()
    {
      $data = [
        "nama_brg" => $this->input->post('nama_brg',true),
        "keterangan" => $this->input->post('keterangan',true),
        "kategori" => $this->input->post('kategori',true),
        "harga" => $this->input->post('harga',true),
        "stok" => $this->input->post('stok',true),  
        "gambar" => $this->input->post('gambar',true),
      ];
      $this->db->where('id_brg', $this->input->post('id_brg'));
      $this->db->update('tbl_barang',$data);
    }

    public function find($id)
    {
      $result = $this->db->where('id_brg',$id)
                         ->limit(1)
                         ->get('tbl_barang');
      if($result->num_rows() > 0){
        return $result->row();
      }else{
        return array();
      }
    }






  }//akhir class
?>