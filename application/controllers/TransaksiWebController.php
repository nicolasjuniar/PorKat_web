<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TransaksiWebController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $models = array(
      'PesanModel' => 'PesanModel',
      'DetailPesanModel'=>'DetailPesanModel'
    );
    $this->load->model($models);
  }

  public function index()
  {
    $this->load->view('TransaksiView');
  }

  public function setTransaksiView()
  {
    $this->checkStatus();
    $countTransaksi=$this->PesanModel->getCountPesan();
    $config['base_url']=base_url().'TransaksiWebController/setTransaksiView/';
    $config['total_rows'] = $countTransaksi;
    $config['per_page'] = 10;
    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);
    $data['list_transaksi']=$this->PesanModel->getListPesan($config['per_page'],$from);
    $this->load->view('TransaksiView',$data);
  }

  public function checkStatus()
  {
    if($this->session->userdata('status')!='login')
    {
      redirect(base_url().'login');
    }
  }

  public function rejectTransaksi($idPesan)
  {
    $Pesan=array(
      'id_pesan'=>$idPesan,
      'status'=>'ditolak'
    );

    $this->PesanModel->updatePesan($Pesan);
  }

  public function confirmTransaksi($idPesan)
  {
    $Pesan=array(
      'id_pesan'=>$idPesan,
      'status'=>'sedang berlangsung'
    );

    $this->PesanModel->updatePesan($Pesan);
  }
}
