<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PelangganWebController extends CI_Controller {

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
    $this->load->view('PelangganView');
  }

  public function setPelangganView()
  {
    $this->checkStatus();
    $countPelanggan=$this->PelangganModel->getCountPelanggan();
    $config['base_url']=base_url().'PelangganWebController/setPelangganView/';
    $config['total_rows'] = $countPelanggan;
    $config['per_page'] = 10;
    $from = $this->uri->segment(2);
    $this->pagination->initialize($config);
    $data['list_pelanggan']=$this->PelangganModel->getListPelanggan($config['per_page'],$from);
    $this->load->view('PelangganView',$data);
  }

  public function checkStatus()
  {
    if($this->session->userdata('status')!='login')
    {
      redirect(base_url().'login');
    }
  }

  public function deletePelanggan($id_pelanggan)
  {
    $DataPelanggan=array(
      'id_pelanggan'=>$id_pelanggan,
      'status'=>0
    );

    $this->PelangganModel->updatePelanggan($DataPelanggan);
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
