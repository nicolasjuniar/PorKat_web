<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginWebController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $models = array(
      'AdminModel'=>'AdminModel',
      'PelangganModel'=>'PelangganModel'
    );
    $this->load->model($models);
  }

  public function index()
  {
    $this->load->view('LoginView');
  }

  public function Login_web()
  {
    $DataLogin=array(
      'id_pengguna'=>$this->input->post('id_pengguna'),
      'katasandi'=>$this->input->post('katasandi')
    );

    $CekRequired = array(
      array(
        'field'=>'id_pengguna',
        'label','id_pengguna',
        'rules'=>'trim|required',
        'errors'=>array(
          'required'=>'id pengguna tidak boleh kosong'
        )
      ),
      array(
        'field'=>'katasandi',
        'label'=>'katasandi',
        'rules'=>'trim|required',
        'errors'=>array(
          'required'=>'kata sandi tidak boleh kosong'
        )
      )
    );

    $CekLogin=array(
      array(
        'field'=>'katasandi',
        'label'=>'katasandi',
        'rules'=>'callback_getDataAdmin',
        'errors'=>array(
          'CekLogin'=>'id pengguna atau kata sandi salah'
        )
      )
    );

    $this->form_validation->set_rules($CekRequired);
    if($this->form_validation->run())
    {
      $this->form_validation->set_rules($CekLogin);
      if($this->form_validation->run())
      {
        $datasession = $this->LoginModel->getDataAdmin($DataLogin);

        $this->session->set_userdata($datasession);
        $this->session->set_userdata('status','login');
      }
      else
      {
        echo validation_errors();
      }
    }
    else
    {
      echo validation_errors();
    }
  }
}
