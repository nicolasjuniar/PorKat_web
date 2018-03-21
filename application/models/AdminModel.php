<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminModel extends CI_Model {

  public function cekLogin($DataLogin)
  {
    $this->db->select('*');
    $this->db->from('tbl_admin');
    $this->db->where('id_pengguna',$DataLogin["id_pengguna"]);
    $this->db->where('katasandi',$DataLogin["katasandi"]);
    $num_rows = $this->db->count_all_results('');
    if($num_rows==0)
    {
      return false;
    }
    else
    {
      return true;
    }
  }


  public  function getDataAdmin($DataLogin)
  {
    $this->db->select('*');
    $this->db->from('tbl_admin');
    $this->db->where('email',$DataLogin["email"]);
    $this->db->where('katasandi',$DataLogin["katasandi"]);
    $DataAdmin=$this->db->get('')->row_array();
    return $DataAdmin;
  }
}
