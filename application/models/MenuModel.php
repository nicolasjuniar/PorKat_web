<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MenuModel extends CI_Model {

  public function getListMenu($id_katering)
  {
    $this->db->select('*');
    $this->db->from('tbl_menu');
    $this->db->where('id_katering',$id_katering);
    $listmenu=$this->db->get('')->result_array();
    return $listmenu;
  }
}
