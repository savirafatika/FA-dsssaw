<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hs extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('Hs_model', 'hs');
  }

  public function lihatHasil()
  {
    $this->hs->lihatHasil();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Calon Asdos Berhasil Dirangking!</div>');
    redirect('admin/hs');
  }

  public function terimaCa($id)
  {
    $this->hs->terimaCa($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Calon Asdos Berhasil Diterima!</div>');
    redirect('admin/hs');
  }

  public function tolakCa($id)
  {
    $this->hs->tolakCa($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Calon Asdos Tidak Diterima!</div>');
    redirect('admin/hs');
  }
}
