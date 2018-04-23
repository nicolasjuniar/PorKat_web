<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PelangganModel extends CI_Model {

  public function getDataPelanggan($DataLogin)
  {
    $this->db->select('*');
    $this->db->from('tbl_pelanggan');
    $this->db->where('id_pengguna',$DataLogin['id_pengguna']);
    $this->db->where('katasandi',$DataLogin['katasandi']);
    $DataPelanggan=$this->db->get('')->row_array();
    $num_rows=$this->db->count_all_results('');
    if($num_rows==0)
    {
      return NULL;
    }
    else
    return $DataPelanggan;
  }

  public function cekUsername($id_pengguna)
  {
    $this->db->select('*');
    $this->db->from('tbl_pelanggan');
    $this->db->where('id_pengguna',$id_pengguna);
    $num_rows=$this->db->count_all_results('');
    if($num_rows==0)
    {
      return true;
    }
    else {
      return false;
    }
  }

  public function insertPelanggan($DataPelanggan)
  {
    $this->db->insert('tbl_pelanggan',$DataPelanggan);
  }

  public function updatePelanggan($DataPelanggan)
  {
    $this->db->where('id_pelanggan',$DataPelanggan['id_pelanggan']);
    $this->db->update('tbl_pelanggan',$DataPelanggan);
  }

  public function getCountPelanggan()
  {
    $this->db->select('*');
    $this->db->from('tbl_pelanggan');
    $this->db->where('status','1');
    $countKatering=$this->db->count_all_results('');
    return $countKatering;
  }

  public function getListPelanggan($number,$offset)
  {
    $this->db->select('*');
    $this->db->from('tbl_pelanggan');
    $this->db->where('status','1');
    $query=$this->db->get('',$number.$offset);
    return $query->result();
  }

  public function getCountSearchPelanggan($keyword)
  {
    $this->db->select('*');
    $this->db->from('tbl_pelanggan');
    $this->db->where('status','1');
    $this->db->like('nama_lengkap',$keyword);
    $countKatering=$this->db->count_all_results('');
    return $countKatering;
  }

  public function getListSearchPelanggan($keyword,$number,$offset)
  {
    $this->db->select('*');
    $this->db->from('tbl_pelanggan');
    $this->db->where('status','1');
    $this->db->like('nama_lengkap',$keyword);
    $query=$this->db->get('',$number.$offset);
    return $query->result();
  }

  public function getPelangganById($id_pelangan){
    $this->db->select('*');
    $this->db->from('tbl_pelanggan');
    $this->db->where('id_pelanggan',$id_pelangan);
    $pelanggan=$this->db->get('')->row_array();
    return $pelanggan;
  }
}
