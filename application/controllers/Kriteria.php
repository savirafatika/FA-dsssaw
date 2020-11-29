<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kriteria_model', 'kriteria');
  }

  public function tambahKriteria()
  {
    $this->kriteria->tambahKriteria();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Kamu Berhasil Menambah Kriteria</div>');
    redirect('admin/kriteria');
  }

  public function editKriteria()
  {
    $this->kriteria->editKriteria();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kriteria berhasil diubah!</div>');
    redirect('admin/kriteria');
  }

  public function hapusKriteria($kd_kriteria)
  {
    $this->kriteria->hapusKriteria($kd_kriteria);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kriteria berhasil dihapus!</div>');
    redirect('admin/kriteria');
  }
}
