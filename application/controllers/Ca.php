<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ca extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Ca_model', 'ca');
  }
  public function tambahCa()
  {
    $gambar = $_FILES['foto']['name'];
    if ($gambar = '') {
      # code...
    } else {
      $config['upload_path']          = './assets/images/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 2048;
      $config['max_width']            = 8000;
      $config['max_height']           = 9000;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('foto')) {
        $this->ca->tambahCaNopict();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Kamu Berhasil Menambah Calon Asdos</div>');
        redirect('admin/ca');
      } else {
        $this->ca->tambahCa();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Kamu Berhasil Menambah Calon Asdos</div>');
        redirect('admin/ca');
      }
    }
  }

  public function editCa()
  {
    $data['ca'] = $this->db->get_where('calon_asdos', ['email' => $this->session->userdata('email')])->row_array();
    // cek jika ada gambar yang akan diupload
    $upload_image = $_FILES['foto']['name'];
    if ($upload_image) {
      $config['upload_path']          = './assets/images/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 2048;
      $config['max_width']            = 8000;
      $config['max_height']           = 9000;

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('foto')) {
        $old_image = $data['ca']['foto'];
        if ($old_image != 'user.png') {
          unlink(FCPATH . 'assets/images/' . $old_image);
        }
        $new_image = $this->upload->data('file_name');
        // insert image ke tabel user pada kolom image
        $this->db->set('foto', $new_image);
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Calon Asdos gagal diubah!</div>');
        redirect('admin/ca');
      }
    }
    $this->ca->editCa();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Calon Asdos berhasil diubah!</div>');
    redirect('admin/ca');
  }

  public function hapusCa($kd_ca)
  {
    $this->ca->hapusCa($kd_ca);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Calon Asdos berhasil dihapus!</div>');
    redirect('admin/ca');
  }
}
