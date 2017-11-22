<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $models = array(
      'KateringModel' => 'KateringModel',
      'PelangganModel' => 'PelangganModel'
    );
    $this->load->model($models);
  }

  public function Login()
  {
    $DataLogin=array(
      'id_pengguna'=>$this->input->get('id_pengguna'),
      'katasandi'=>$this->input->get('katasandi')
    );
    $data1=$this->PelangganModel->getDataPelanggan($DataLogin);
    $data2=$this->KateringModel->getDataKatering($DataLogin);
    if($data1!=NULL)
    {
      $response=array(
        'status'=>true,
        'role'=>'pelanggan',
        'message'=>'berhasil masuk',
        'datapelanggan'=>$data1
      );
    }
    else if($data2!=NULL)
    {
      $response=array(
        'status'=>true,
        'role'=>'katering',
        'message'=>'berhasil masuk',
        'datakatering'=>$data2
      );
    }
    else {
      $response=array(
        'status'=>false,
        'message'=>'id pengguna/katasandi salah'
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
