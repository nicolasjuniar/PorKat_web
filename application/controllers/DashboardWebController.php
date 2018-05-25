<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DashboardWebController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $models = array(
      'AdminModel'=>'AdminModel'
    );
    $this->load->model($models);
  }

  public function index()
  {
    $this->load->view('KateringView');
  }

  public function logoutWeb()
  {
    $this->session->unset_userdata('status');
    redirect('login');
  }
}
