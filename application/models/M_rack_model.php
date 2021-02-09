<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_rack_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class M_rack_model extends CI_Model {

  private $table_name = "rack";
  private $primaryKey = "id_rack";

  public function showRack()
  {
    return $this->db->get($this->table_name)->result();
  }

  public function insertRack($data)
  {
    $this->db->insert($this->table_name, $data);
    return true;
  }

  public function deleteMember($key)
  {
    $this->db->delete($this->table_name, ['id_rack' => $key]);
    //$this->db->query("DELETE FROM `{$this->table_name}` WHERE id_user = `{$key}`");
    return true;
  }
  // ------------------------------------------------------------------------

}

/* End of file M_rack_model.php */
/* Location: ./application/models/M_rack_model.php */