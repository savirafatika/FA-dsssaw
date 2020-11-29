<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Dosen_model', 'dosen');
  }

  public function tambahDosen()
  {
    $this->dosen->tambahDosen();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Kamu Berhasil Menambah Dosen</div>');
    redirect('admin/dosen');
  }

  public function editDosen()
  {
    $this->dosen->editDosen();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dosen berhasil diubah!</div>');
    redirect('admin/dosen');
  }

  public function hapusDosen($nik)
  {
    $this->dosen->hapusDosen($nik);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dosen berhasil dihapus!</div>');
    redirect('admin/dosen');
  }
}
