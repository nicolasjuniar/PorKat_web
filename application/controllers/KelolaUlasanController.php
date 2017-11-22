<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KelolaUlasanController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $models = array(
      'UlasanModel' => 'UlasanModel',
      'KateringModel'=>'KateringModel'
    );
    $this->load->model($models);
  }

  public function GetUlasan()
  {
    $id_katering=$this->input->get('id_katering');
    $id_pelanggan=$this->input->get('id_pelanggan');

    $ListUlasan=$this->UlasanModel->getListUlasan($id_katering);
    $UlasanPelanggan=$this->UlasanModel->getUlasanPelanggan($id_pelanggan,$id_katering);

    $response=array(
      'listulasan'=>$ListUlasan,
      'ulasanpelanggan'=>$UlasanPelanggan
    );

    $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($response, JSON_PRETTY_PRINT))
          ->_display();
      exit;
  }

  public function Ulas()
  {
    $Ulasan = json_decode(file_get_contents('php://input'),true);
    $Ulasan['waktu_ulasan'] = date('Y-m-d H:i:s');

    $id_ulasan=$this->UlasanModel->insertUlasan($Ulasan);
    $this->KateringModel->updateRating($Ulasan['id_katering']);

    $response=array(
      'id_ulasan'=>$id_ulasan,
      'ulasan'=>$Ulasan['ulasan'],
      'rating'=>$Ulasan['rating'],
      'message'=>'Ulas katering berhasil'
    );

    $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($response, JSON_PRETTY_PRINT))
          ->_display();
      exit;
  }

  public function IsUlas()
  {
    $id_pelanggan=$this->input->get('id_pelanggan');
    $id_katering=$this->input->get('id_katering');
    $response=array(
      'ulas'=>$this->UlasanModel->isUlas($id_pelanggan,$id_katering)
    );

    $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($response, JSON_PRETTY_PRINT))
          ->_display();
      exit;
  }

  public function DeleteUlasan($id_ulasan)
  {
    $id_katering=$this->input->post('id_katering');
    $id_pelanggan=$this->input->post('id_pelanggan');

    $this->UlasanModel->deleteUlasan($id_ulasan);
    $response=array(
      'message'=>'Ulasan berhasil dihapus'
    );

    $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($response, JSON_PRETTY_PRINT))
          ->_display();
      exit;
  }

  public function UpdateUlasan()
  {
    $Ulasan = json_decode(file_get_contents('php://input'),true);
    $Ulasan['waktu_ulasan'] = date('Y-m-d H:i:s');

    $this->UlasanModel->updateUlasan($Ulasan);
    $response=array(
      'ulasan'=>$Ulasan['ulasan'],
      'rating'=>$Ulasan['rating'],
      'message'=>'Ulasan berhasil diubah'
    );

    $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($response, JSON_PRETTY_PRINT))
          ->_display();
      exit;
  }
}
