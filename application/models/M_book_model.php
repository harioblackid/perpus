<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_book_model
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

class M_book_model extends CI_Model {

  private $table_name = "book";
  private $primaryKey = "id_book";

  public function showBook()
  {
    return $this->db->get($this->table_name)->result();
  }

  public function insertBook($data)
  {
    return $this->db->insert($this->table_name, $data);
  }

}

/* End of file M_book_model.php */
/* Location: ./application/models/M_book_model.php */