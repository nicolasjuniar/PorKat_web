<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MenuModel extends CI_Model {

  public function getListMenu($id_katering)
  {
    $this->db->select('*');
    $this->db->from('tbl_menu');
    $this->db->where('id_katering',$id_katering);
    $this->db->where('status',1);
    $listmenu=$this->db->get('')->result_array();
    return $listmenu;
  }

  public function insertMenu($Menu)
  {
    $this->db->insert('tbl_menu',$Menu);
  }

  public function updateMenu($Menu)
  {
    $this->db->where('id_menu',$Menu['id_menu']);
    $this->db->update('tbl_menu',$Menu);
  }
}
