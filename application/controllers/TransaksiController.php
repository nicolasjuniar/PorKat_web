<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TransaksiController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $models = array(
      'PesanModel' => 'PesanModel',
      'DetailPesanModel'=>'DetailPesanModel'
    );
    $this->load->model($models);
  }

  public function InsertPesan()
  {
    $DataPesan = json_decode(file_get_contents('php://input'),true);
    $Pesan=$DataPesan["pesan"];
    $Pesan['status']='melakukan pembayaran';
    $id_pesan=$this->PesanModel->insertPesan($Pesan);
    $ListDetailPesan=$DataPesan["detailpesan"];
    foreach ($ListDetailPesan as $DetailPesan) {
      $DetailPesan['id_pesan']=$id_pesan;
      $this->DetailPesanModel->insertDetailPesan($DetailPesan);
    }

    $response=array(
      'message'=>'berhasil memesan katering'
    );

    $this->output
    ->set_status_header(200)
    ->set_content_type('application/json', 'utf-8')
    ->set_output(json_encode($response, JSON_PRETTY_PRINT))
    ->_display();
    exit;
  }

  public function GetListPesanPelanggan()
  {
    $id_pelanggan=$this->input->get('id_pelanggan');
    $ListPesan=$this->PesanModel->getAllPesan($id_pelanggan);

    $response=array(
      'listtransaksi'=>$ListPesan
    );

    $this->output
    ->set_status_header(200)
    ->set_content_type('application/json', 'utf-8')
    ->set_output(json_encode($response, JSON_PRETTY_PRINT))
    ->_display();
    exit;
  }

  public function GetListPengantaran()
  {
    $id_katering=$this->input->get('id_katering');
    $ListPesan=$this->PesanModel->getPesanToday($id_katering);

    $response=array(
      'listtransaksi'=>$ListPesan
    );

    $this->output
    ->set_status_header(200)
    ->set_content_type('application/json', 'utf-8')
    ->set_output(json_encode($response, JSON_PRETTY_PRINT))
    ->_display();
    exit;
  }

  public function GetListMakanan()
  {
    $id_katering=$this->input->get('id_katering');
    $tanggal=$this->input->get('tanggal');
    $ListMenu=$this->PesanModel->getListMakananToday($id_katering);

    $response=array(
      'listmenu'=>$ListMenu
    );

    $this->output
    ->set_status_header(200)
    ->set_content_type('application/json', 'utf-8')
    ->set_output(json_encode($response, JSON_PRETTY_PRINT))
    ->_display();
    exit;
  }

  public function UpdatePesan()
  {
    $DataPesan=array(
      'id_pesan'=>$this->input->post('id_pesan'),
      'status'=>'konfirmasi nota',
      'nota'=>$this->input->post('nota'),
    );

    $this->PesanModel->updatePesan($DataPesan);

    $foto_nota=base64_decode($this->input->post('foto_nota'));
    $fp = fopen($_SERVER['DOCUMENT_ROOT'].'/porkat_web/foto/nota/'.$DataPesan['nota'].'', 'w');
    fwrite($fp, $foto_nota);

    $response=array(
      'message'=>'berhasil mengunggah nota pembayaran'
    );

    $this->output
    ->set_status_header(200)
    ->set_content_type('application/json', 'utf-8')
    ->set_output(json_encode($response, JSON_PRETTY_PRINT))
    ->_display();
    exit;
  }

  public function getListMenuPesanan()
  {
    $id_pesan=$this->input->get('id_pesan');
    $response=array(
      'list_menu'=>$this->PesanModel->getListMenuPesanan($id_pesan)
    );

    $this->output
    ->set_status_header(200)
    ->set_content_type('application/json', 'utf-8')
    ->set_output(json_encode($response, JSON_PRETTY_PRINT))
    ->_display();
    exit;
  }
}
