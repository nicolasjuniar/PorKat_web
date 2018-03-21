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

  public function updateRating($id_katering)
  {
    $this->db->select('round(sum(rating)/count(id_katering),2) as rate');
    $this->db->from('tbl_ulasan');
    $this->db->where('id_katering',$id_katering);
    $this->db->group_by('id_katering');
    $rating=$this->db->get()->row()->rate;

    $update=array(
      'rating'=>$rating
    );

    $this->db->where('id_katering',$id_katering);
    $this->db->update('tbl_katering',$update);
  }

  public function updateKateringByNoVerifikasi($DataKatering)
  {
    $this->db->where('no_verifikasi',$DataKatering['no_verifikasi']);
    $this->db->update('tbl_katering',$DataKatering);
  }

  public function updateKatering($DataKatering)
  {
    $this->db->where('id_katering',$DataKatering['id_katering']);
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
    $this->db->select('k.id_katering,k.nama_katering,k.no_telp,k.alamat,k.foto,k.rating,k.longitude,k.latitude,coalesce(sum(u.rating)*count(u.id_katering),0) as total_rate');
    $this->db->from('tbl_katering k');
    $this->db->join('tbl_ulasan u','k.id_katering=u.id_katering','left');
    $this->db->order_by('total_rate','desc');
    $this->db->group_by('k.id_katering');
    $DataKatering=$this->db->get('')->result_array();
    return $DataKatering;
  }

  public function getAllKateringByDistance($location)
  {
    $DataKatering=[];
    $this->db->select('k.id_katering,k.nama_katering,k.no_telp,k.alamat,k.foto,k.rating,k.longitude,k.latitude,sqrt(pow(k.longitude-'.$location["longitude"].',2)+pow(k.latitude-'.$location["latitude"].',2)) as jarak');
    $this->db->from('tbl_katering k');
    $this->db->join('tbl_ulasan u','k.id_katering=u.id_katering','left');
    $this->db->order_by('jarak','asc');
    $this->db->group_by('k.id_katering');
    $DataKatering=$this->db->get('')->result_array();
    return $DataKatering;
  }
}
