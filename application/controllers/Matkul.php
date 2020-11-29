<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Matkul_model', 'matkul');
  }

  public function tambahMatkul()
  {
    $this->matkul->tambahMatkul();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Kamu Berhasil Menambah Matakuliah</div>');
    redirect('admin/matkul');
  }

  public function editMatkul()
  {
    $this->matkul->editMatkul();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Matakuliah berhasil diubah!</div>');
    redirect('admin/matkul');
  }

  public function hapusMatkul($kd_mt)
  {
    $this->matkul->hapusMatkul($kd_mt);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Matakuliah berhasil dihapus!</div>');
    redirect('admin/matkul');
  }
}
