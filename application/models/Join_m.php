<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Join_m extends CI_Model {
 
public function duatable() {
 $this->db->select('*');
 $this->db->from('tbl_invoice');
 $this->db->join('tbl_pesanan','tbl_pesanan.id_invoice=tbl_invoice.id_invoice');
 $data = $this->db->get();
 return $data->result_array();

}

 // public function tambahDataBarang()
 //    {
 //      $data = [
 //        "nama_brg" => $this->input->post('nama_brg',true),
 //        "keterangan" => $this->input->post('keterangan',true),
 //        "kategori" => $this->input->post('kategori',true),
 //        "harga" => $this->input->post('harga',true),
 //        "stok" => $this->input->post('stok',true),  
 //        "gambar" => $this->input->post('gambar',true),
 //      ];
 //      $this->db->insert('tbl_barang',$data);
 //    }

    public function hapusPesan($id)
    {
      $this->db->delete('tbl_pesanan',['id_pesanan' => $id]);
    }

    public function getAllDataById($id)
    {
      return $this->db->get_where('tbl_pesanan',['id_pesanan' => $id])->row_array();
    }

    public function ubah_data()
    {
      $data = [
        "nama_brg" => $this->input->post('nama_brg',true),
        "jumlah" => $this->input->post('jumlah',true),
        "harga" => $this->input->post('harga',true),
      ];
      $this->db->where('id_pesanan', $this->input->post('id_pesanan'));
      $this->db->update('tbl_pesanan',$data);
    }

    public function find($id)
    {
      $result = $this->db->where('id_pesanan',$id)
                         ->limit(1)
                         ->get('tbl_pesanan');
      if($result->num_rows() > 0){
        return $result->row();
      }else{
        return array();
      }
    }

}