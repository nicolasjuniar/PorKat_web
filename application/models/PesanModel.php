<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PesanModel extends CI_Model {

  public function insertPesan($Pesan)
  {
    $this->db->insert('tbl_pesan',$Pesan);
    $id_pesan=$this->db->insert_id();
    return $id_pesan;
  }

  public function updatePesan($Pesan)
  {
    $this->db->where('id_pesan',$Pesan['id_pesan']);
    $this->db->update('tbl_pesan',$Pesan);
  }

  public function getAllPesan($id_pelanggan)
  {
    $this->db->select('p.id_pesan,k.nama_katering,p.tgl_mulai,p.tgl_selesai,p.alamat,p.catatan,p.nota,p.total,p.status');
    $this->db->from('tbl_pesan p');
    $this->db->join('tbl_katering k','p.id_katering=k.id_katering');
    $this->db->where('p.id_pelanggan',$id_pelanggan);
    $ListPesan=$this->db->get('')->result_array();
    return $ListPesan;
  }

  public function getPesanToday($id_katering)
  {
    $this->db->select('psn.id_pesan,dtl_psn.id_detailpesan,plg.nama_lengkap,psn.catatan,psn.alamat,psn.longitude,psn.latitude,dtl_psn.waktu_pengantaran,m.nama_menu,m.foto,dtl_psn.status');
    $this->db->from('tbl_pesan psn');
    $this->db->join('tbl_pelanggan plg','psn.id_pelanggan=plg.id_pelanggan');
    $this->db->join('tbl_detailpesan dtl_psn','psn.id_pesan=dtl_psn.id_pesan');
    $this->db->join('tbl_menu m','dtl_psn.id_menu=m.id_menu');
    $this->db->where('psn.id_katering',$id_katering);
    $this->db->where('dtl_psn.waktu_pengantaran between "'.date("Y-m-d").'" and "'.date("Y-m-d", time() + 86400).'"');
    $this->db->where('dtl_psn.status','belum diantar');
    $this->db->order_by('dtl_psn.waktu_pengantaran','asc');
    $ListPesan=$this->db->get('')->result_array();
    return $ListPesan;
  }

  public function getListMakananToday($id_katering)
  {
    $this->db->select('m.nama_menu,count(m.nama_menu) as jumlah, m.foto');
    $this->db->from('tbl_detailpesan dtl_psn');
    $this->db->join('tbl_menu m','dtl_psn.id_menu=m.id_menu');
    $this->db->join('tbl_pesan psn','dtl_psn.id_pesan=psn.id_pesan');
    $this->db->where('psn.id_katering',$id_katering);
    $this->db->where('dtl_psn.waktu_pengantaran between "'.date("Y-m-d").'" and "'.date("Y-m-d", time() + 86400).'"');
    $this->db->group_by('m.nama_menu');
    $ListMakanan=$this->db->get('')->result_array();
    return $ListMakanan;
  }
}