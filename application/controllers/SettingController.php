<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SettingController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $models = array(
      'PelangganModel' => 'PelangganModel',
      'KateringModel'=>'KateringModel'
    );
    $this->load->model($models);
  }

  public function UbahKatasandiPelanggan()
  {
    $DataPelanggan = json_decode(file_get_contents('php://input'),true);

    $this->PelangganModel->updatePelanggan($DataPelanggan);

    $response=array(
      'message'=>'katasandi berhasil diubah'
    );

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
    exit;
  }

  public function UbahKatasandiKatering()
  {
    $DataKatering = json_decode(file_get_contents('php://input'),true);

    $this->KateringModel->updateKatering($DataKatering);

    $response=array(
      'message'=>'katasandi berhasil diubah'
    );

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
    exit;
  }

  public function UbahProfilPelanggan()
  {
    $DataPelanggan = json_decode(file_get_contents('php://input'),true);

    $this->PelangganModel->updatePelanggan($DataPelanggan);

    $response=array(
      'message'=>'ubah profil berhasil'
    );

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
    exit;
  }
}
