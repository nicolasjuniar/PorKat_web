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
    $DataPelanggan=array(
      'id_pengguna'=>$this->input->post('id_pengguna'),
      'katasandi'=>$this->input->post('katasandi'),
      'no_telp'=>$this->input->post('no_telp'),
      'nama_lengkap'=>$this->input->post('nama_lengkap'),
      'alamat'=>$this->input->post('alamat')
    );
    if($this->PelangganModel->cekUsername($DataPelanggan['id_pengguna']))
    {
      $this->PelangganModel->insertPelanggan($DataPelanggan);

      $response=array(
        'status'=>true,
        'message'=>'registrasi berhasil'
      );
    }
    else {
      $response=array(
        'status'=>false,
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
