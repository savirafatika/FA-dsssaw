<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dt_kriteria extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Dt_kriteria_model', 'dt_kriteria');
  }

  public function tambahDt_kriteria()
  {
    $this->dt_kriteria->tambahDt_kriteria();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Kamu Berhasil Menambah Detail Kriteria</div>');
    redirect('admin/dt_kriteria');
  }

  public function editDt_kriteria()
  {
    $this->dt_kriteria->editDt_kriteria();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Detail Kriteria berhasil diubah!</div>');
    redirect('admin/dt_kriteria');
  }

  public function hapusDt_kriteria($kd_dtkriteria)
  {
    $this->dt_kriteria->hapusDt_kriteria($kd_dtkriteria);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail Kriteria berhasil dihapus!</div>');
    redirect('admin/dt_kriteria');
  }
}
