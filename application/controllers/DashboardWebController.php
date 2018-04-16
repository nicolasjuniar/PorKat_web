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
    $this->checkStatus();
    $this->load->view('DashboardView');
  }


  public function logoutWeb(){
    $this->session->set_userdata('status','logout');
    redirect(base_url().'login','refresh');
  }

  public function checkStatus()
  {
    if($this->session->userdata('status')!='login')
    {
      redirect(base_url().'login');
    }
  }
}
