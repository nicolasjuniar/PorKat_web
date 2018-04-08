<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KateringController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $models = array(
      'KateringModel' => 'KateringModel',
      'MenuModel'=>'MenuModel'
    );
    $this->load->model($models);
  }

  public function updatePhotoKatering()
  {
    $dataKatering=json_decode(file_get_contents('php://input'),true);
    $encodedImage=$dataKatering['encoded_image'];
    unset($dataKatering['encoded_image']);

    $this->KateringModel->updateKatering($dataKatering);

    $response=array(
      'message'=>'Berhasil mengungah foto katering'
    );

    $fotoKatering=base64_decode($encodedImage);
    $fp = fopen($_SERVER['DOCUMENT_ROOT'].'/porkat_web/foto/katering/'.$dataKatering['foto'].'', 'w');
    fwrite($fp, $fotoKatering);

    $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($response, JSON_PRETTY_PRINT))
          ->_display();
      exit;
  }
}
