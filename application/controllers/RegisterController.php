<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegisterController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $models = array(
      'KateringModel' => 'KateringModel',
      'PelangganModel' => 'PelangganModel'
    );
    $this->load->model($models);
  }

  public function RegisterPelanggan()
  {
    $DataPelanggan = json_decode(file_get_contents('php://input'),true);
    if($this->PelangganModel->cekUsername($DataPelanggan['id_pengguna']))
    {
      $this->PelangganModel->insertPelanggan($DataPelanggan);
      $Pelanggan=$this->PelangganModel->getDataPelanggan($DataPelanggan);

      $response=array(
        'success'=>true,
        'message'=>'registrasi berhasil',
        'datapelanggan'=>$Pelanggan
      );
    }
    else {
      $response=array(
        'success'=>false,
        'message'=>'id pengguna sudah terdaftar'
      );
    }

    $this->output
    ->set_status_header(200)
    ->set_content_type('application/json', 'utf-8')
    ->set_output(json_encode($response, JSON_PRETTY_PRINT))
    ->_display();
    exit;
  }

  public function RegisterKatering()
  {
    $DataKatering = json_decode(file_get_contents('php://input'),true);
    $encodedImage=$DataKatering['encoded_image'];
    unset($DataKatering['encoded_image']);
    if($this->KateringModel->cekUsername($DataKatering['id_pengguna']))
    {
      if($this->KateringModel->cekNoVerifikasi($DataKatering['no_verifikasi']))
      {
        $this->KateringModel->updateKateringByNoVerifikasi($DataKatering);
        $Katering=$this->KateringModel->getDataKatering($DataKatering);

        $response=array(
          'success'=>true,
          'message'=>'registrasi berhasil',
          'datakatering'=>$Katering
        );
      }
      else {
        $response=array(
          'success'=>false,
          'message'=>'no verifikasi salah'
        );
      }
    }
    else {
      $response=array(
        'success'=>false,
        'message'=>'id pengguna sudah terdaftar'
      );
    }

    $fotoKatering=base64_decode($encodedImage);
    $fp = fopen($_SERVER['DOCUMENT_ROOT'].'/porkat_web/foto/katering/'.$DataKatering['foto'].'', 'w');
    fwrite($fp, $fotoKatering);

    $this->output
    ->set_status_header(200)
    ->set_content_type('application/json', 'utf-8')
    ->set_output(json_encode($response, JSON_PRETTY_PRINT))
    ->_display();
    exit;
  }
}
