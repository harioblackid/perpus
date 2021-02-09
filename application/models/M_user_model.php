<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user_model extends CI_Model 
{
  private $table_name = "user";
  private $primaryKey = "id_user";

  //Buat method untuk menampilkan data Member pada table user
  public function showMember()
  {
    return $this->db->query("SELECT * From user WHERE status = 'member'");
  }

  public function showPetugas()
  {
    return $this->db->get_where($this->table_name, ['status' => "petugas"]);
  }

  public function insertMember($data)
  {
    //insert(nama table, data-ARRAY)
    $this->db->insert($this->table_name, $data);
    return true;
  }

  public function insertPetugas($data)
  {
    $this->db->insert($this->table_name, $data);
    return true;
  }

  public function deleteMember($key)
  {
    $this->db->delete($this->table_name, ['id_user' => $key]);
    //$this->db->query("DELETE FROM `{$this->table_name}` WHERE id_user = `{$key}`");
    return true;
  }
}