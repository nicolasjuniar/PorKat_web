<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KelolaMenuController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $models = array(
      'KateringModel' => 'KateringModel',
      'PelangganModel' => 'PelangganModel',
      'MenuModel'=>'MenuModel'
    );
    $this->load->model($models);
  }

  public function GetListMenu()
  {
    $id_katering=$this->input->get('id_katering');

    $response=array(
      'listmenu'=>$this->MenuModel->getListMenu($id_katering)
    );

    $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($response, JSON_PRETTY_PRINT))
          ->_display();
      exit;
  }

  public function InsertMenu()
  {
    $Menu = json_decode(file_get_contents('php://input'),true);
    $this->MenuModel->insertMenu($Menu);

    $response=array(
      'message'=>'berhasil memasukkan menu'
    );

    $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($response, JSON_PRETTY_PRINT))
          ->_display();
      exit;
  }

  public function UpdateMenu()
  {
    $Menu = json_decode(file_get_contents('php://input'),true);
    $this->MenuModel->updateMenu($Menu);

    $response=array(
      'message'=>'berhasil'
    );

    $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($response, JSON_PRETTY_PRINT))
          ->_display();
      exit;
  }
}
