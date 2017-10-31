<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GetListKateringController extends CI_Controller {

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

  public function GetListKateringByRating()
  {
    $response=array(
      'listkatering'=>$this->KateringModel->getAllKateringByRating()
    );

    $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($response, JSON_PRETTY_PRINT))
          ->_display();
      exit;
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
}
