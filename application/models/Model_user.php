<?php
  class Model_user extends CI_Model{
    
    public function tampil_data()
    {
      return $this->db->get('user')->result_array();
    }

    public function tambah()
    {
      $data = [
        "username" => $this->input->post('username',true),
        "password" => sha1($this->input->post('password',true)),
        "nama" => $this->input->post('nama',true),
        "no_telp" => $this->input->post('no_telp',true),
        "level" => $this->input->post('level',true),  
      ];
      $this->db->insert('user',$data);
    }



    public function insert($data)
  {
     $this->db->insert('user', $data);
  }



    public function hapus($id)
    {
      $this->db->delete('user',['id_user' => $id]);
    }

    public function getAllDataById($id)
    {
      return $this->db->get_where('user',['id_user' => $id])->row_array();
    }

    public function ubah_data()
    {
      $data = [
        "id_user" => $this->input->post('id_user',true),
        "username" => $this->input->post('username',true),
        "password" => $this->input->post('password',true),
        "nama" => $this->input->post('nama',true),
        "no_telp" => $this->input->post('no_telp',true),
        "level" => $this->input->post('level',true), 
      ];
      $this->db->where('id_user', $this->input->post('id_user'));
      $this->db->update('user',$data);
    }

    public function find($id)
    {
      $result = $this->db->where('id_user',$id)
                         ->limit(1)
                         ->get('user');
      if($result->num_rows() > 0){
        return $result->row();
      }else{
        return array();
      }
    }






  }//akhir class
?>