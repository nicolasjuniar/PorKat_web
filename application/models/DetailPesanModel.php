<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DetailPesanModel extends CI_Model {

  public function insertDetailPesan($DetailPesan)
  {
    $this->db->insert('tbl_detailpesan',$DetailPesan);
  }
}
