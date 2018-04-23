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
    $config['base_url']=base_url().'pelanggan/';
    $config['total_rows'] = $countPelanggan;
    $config['per_page'] = 10;
    $from = $this->uri->segment(1);
    $this->pagination->initialize($config);
    $data['list_pelanggan']=$this->PelangganModel->getListPelanggan($config['per_page'],$from);
    $this->load->view('PelangganView',$data);
  }

  public function setSearchPelangganView()
  {
    $keyword=$this->input->post('keyword');
    $this->checkStatus();
    $countPelanggan=$this->PelangganModel->getCountSearchPelanggan($keyword);
    $config['base_url']=base_url().'pelanggan/search/';
    $config['total_rows'] = $countPelanggan;
    $config['per_page'] = 10;
    $from = $this->uri->segment(2);
    $this->pagination->initialize($config);
    $data['list_pelanggan']=$this->PelangganModel->getListSearchPelanggan($keyword,$config['per_page'],$from);
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

  public function getDetailPelanggan($id_pelanggan){
    $this->checkStatus();
    $pelanggan=$this->PelangganModel->getPelangganById($id_pelanggan);
    $this->load->view('DetailPelangganView',$pelanggan);
  }

  public function setEditPelanggan($id_pelanggan){
    $this->checkStatus();
    $pelanggan=$this->PelangganModel->getPelangganById($id_pelanggan);
    $this->load->view('EditPelangganView',$pelanggan);
  }

  public function updatePelangganWeb()
  {
    $DataPelanggan=array(
      'id_pelanggan'=>$this->input->post('id_pelanggan'),
      'nama_lengkap'=>$this->input->post('nama_lengkap'),
      'id_pengguna'=>$this->input->post('id_pengguna'),
      'no_telp'=>$this->input->post('no_telp'),
      'alamat'=>$this->input->post('alamat')
    );

    $this->PelangganModel->updatePelanggan($DataPelanggan);

    redirect(base_url('pelanggan'));
  }
}
