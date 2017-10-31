<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SettingController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $models = array(
      'PelangganModel' => 'PelangganModel'
    );
    $this->load->model($models);
  }

  public function UbahKatasandiPelanggan()
  {
    $DataPelanggan=array(
      'id_pelanggan'=>$this->input->post('id_pelanggan'),
      'katasandi'=>$this->input->post('katasandi')
    );

    $this->PelangganModel->updatePassword($DataPelanggan['id_pelanggan'],$DataPelanggan);

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

  public function RegisterKatering()
  {
    $DataKatering=array(
      'id_pengguna'=>$this->input->post('id_pengguna'),
      'katasandi'=>$this->input->post('katasandi'),
      'nama_katering'=>$this->input->post('nama_katering'),
      'no_telp'=>$this->input->post('no_telp'),
      'alamat'=>$this->input->post('alamat'),
      'no_verifikasi'=>$this->input->post('no_verifikasi')
    );
    if($this->KateringModel->cekUsername($DataKatering['id_pengguna']))
    {
      if($this->KateringModel->cekNoVerifikasi($DataKatering['no_verifikasi']))
      {
        $this->KateringModel->updateKatering($DataKatering);

        $response=array(
          'status'=>'sukses'
        );
      }
      else {
        $response=array(
          'status'=>'gagal',
          'message'=>'no verifikasi salah'
        );
      }
    }
    else {
      $response=array(
        'status'=>'gagal',
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
}
