<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UlasanModel extends CI_Model {

  public function getListUlasan($id_katering)
  {
    $ListUlasan=[];
    $this->db->select('u.id_ulasan,u.ulasan,u.rating,u.waktu_ulasan,p.id_pengguna,p.nama_lengkap');
    $this->db->from('tbl_ulasan u');
    $this->db->join('tbl_pelanggan p','u.id_pelanggan=p.id_pelanggan');
    $this->db->where('u.id_katering',$id_katering);
    $this->db->order_by('u.waktu_ulasan','desc');
    $ListUlasan=$this->db->get('')->result_array();
		return $ListUlasan;
  }

  public function getUlasanPelanggan($id_pelanggan,$id_katering)
  {
    $this->db->select('u.id_ulasan,u.ulasan,u.rating,u.waktu_ulasan,p.id_pengguna,p.nama_lengkap');
    $this->db->from('tbl_ulasan u');
    $this->db->join('tbl_pelanggan p','u.id_pelanggan=p.id_pelanggan');
    $this->db->where('u.id_pelanggan',$id_pelanggan);
    $this->db->where('u.id_katering',$id_katering);
    $Ulasan=$this->db->get('')->row_array();
    return $Ulasan;
  }

  public function insertUlasan($Ulasan)
  {
    $this->db->insert('tbl_ulasan',$Ulasan);
    $id_ulasan=$this->db->insert_id();
    return $id_ulasan;
  }

  public function updateUlasan($Ulasan)
  {
    $this->load->model('KateringModel');

    $this->db->where('id_ulasan',$Ulasan['id_ulasan']);
    $this->db->update('tbl_ulasan',$Ulasan);

    $id_katering=$this->getIdKatering($Ulasan['id_ulasan']);
    $this->KateringModel->updateRating($id_katering);
  }

  public function getIdKatering($id_ulasan)
  {
    $this->db->select('id_katering');
    $this->db->from('tbl_ulasan');
    $this->db->where('id_ulasan',$id_ulasan);
    $id_katering=$this->db->get()->row()->id_katering;

    return $id_katering;
  }

  public function deleteUlasan($id_ulasan,$id_katering)
  {
    $this->load->model('KateringModel');
    $this->KateringModel->updateRating($id_katering);

    $this->db->where('id_ulasan',$id_ulasan);
    $this->db->delete('tbl_ulasan');
  }

  public function isUlas($id_pelanggan,$id_katering)
  {
    $this->db->select('*');
    $this->db->from('tbl_ulasan');
    $this->db->where('id_pelanggan',$id_pelanggan);
    $this->db->where('id_katering',$id_katering);
    $num_rows=$this->db->count_all_results('');
    if($num_rows==0)
    {
      return false;
    }
    else {
      return true;
    }
  }
}
