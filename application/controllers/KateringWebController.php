<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KateringWebController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $models = array(
      'AdminModel'=>'AdminModel',
      'KateringModel'=>'KateringModel'
    );
    $this->load->model($models);
  }

  public function index()
  {
    $this->load->view('KateringView');
  }

  public function setKateringView()
  {
    $this->checkStatus();
    $countKatering=$this->KateringModel->getCountKatering();
    $config['base_url']=base_url().'katering/';
    $config['total_rows'] = $countKatering;
    $config['per_page'] = 10;
    $from = $this->uri->segment(1);
    $this->pagination->initialize($config);
    $data['list_katering']=$this->KateringModel->getListKatering($config['per_page'],$from);
    $this->load->view('KateringView',$data);
  }

  public function checkStatus()
  {
    if($this->session->userdata('status')!='login')
    {
      redirect(base_url().'login');
    }
  }

  public function deleteKatering($id_katering)
  {
    $DataKatering=array(
      'id_katering'=>$id_katering,
      'status'=>0
    );

    $this->KateringModel->updateKatering($DataKatering);
  }

  public function getDetailKatering($id_katering){
    $this->checkStatus();
    $katering=$this->KateringModel->getKateringById($id_katering);
    $this->load->view('DetailKateringView',$katering);
  }

  public function setEditKatering($id_katering){
    $this->checkStatus();
    $katering=$this->KateringModel->getKateringById($id_katering);
    $this->load->view('EditKateringView',$katering);
  }
}
