<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KateringModel extends CI_Model {

  public function getDataKatering($DataLogin)
  {
    $this->db->select('*');
    $this->db->from('tbl_katering');
    $this->db->where('id_pengguna',$DataLogin['id_pengguna']);
    $this->db->where('katasandi',$DataLogin['katasandi']);
    $DataKatering=$this->db->get('')->row_array();
    $num_rows=$this->db->count_all_results('');
    if($num_rows==0)
    {
      return NULL;
    }
    else
      return $DataKatering;
  }

  public function cekUsername($id_pengguna)
  {
    $this->db->select('*');
    $this->db->from('tbl_katering');
    $this->db->where('id_pengguna',$id_pengguna);
    $num_rows=$this->db->count_all_results('');
    if($num_rows==0)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function insertKatering($DataKatering)
  {
    $this->db->insert('tbl_katering',$DataKatering);
  }

  public function updateKatering($DataKatering)
  {
    $this->db->where('no_verifikasi',$DataKatering['no_verifikasi']);
    $this->db->update('tbl_katering',$DataKatering);
  }

  public function cekNoVerifikasi($no_verifikasi)
  {
    $cek=false;
    $query = $this->db->query("SELECT * FROM tbl_katering WHERE no_verifikasi='$no_verifikasi'");
    $num_rows = $query->num_rows();
    if($num_rows!=0)
    {
      if($query->row()->id_pengguna=='')
      {
        $cek=true;
      }
    }
    return $cek;
  }

  public function getAllKateringByRating()
  {
    $DataKatering=[];
    $this->db->select('*');
    $this->db->from('tbl_katering');
    $this->db->order_by('rating','desc');
    $DataKatering=$this->db->get('')->result_array();
		return $DataKatering;
  }
}
