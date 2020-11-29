<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pengguna_model', 'pengguna');
  }
  public function tambahUser()
  {
    $gambar = $_FILES['image']['name'];
    if ($gambar = '') {
      # code...
    } else {
      $config['upload_path']          = './assets/images/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 2048;
      $config['max_width']            = 8000;
      $config['max_height']           = 9000;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {
        $this->pengguna->tambahPenggunaNopict();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Kamu Berhasil Menambah User</div>');
        redirect('admin/user');
      } else {
        $this->pengguna->tambahPengguna();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Kamu Berhasil Menambah User</div>');
        redirect('admin/user');
      }
    }
  }

  public function editUser()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    // cek jika ada gambar yang akan diupload
    $upload_image = $_FILES['image']['name'];
    if ($upload_image) {
      $config['upload_path']          = './assets/images/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 2048;
      $config['max_width']            = 8000;
      $config['max_height']           = 9000;

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image')) {
        $old_image = $data['user']['image'];
        if ($old_image != 'user.png') {
          unlink(FCPATH . 'assets/images/' . $old_image);
        }
        $new_image = $this->upload->data('file_name');
        // insert image ke tabel user pada kolom image
        $this->db->set('image', $new_image);
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pengguna gagal diubah!</div>');
        redirect('admin/user');
      }
    }
    $this->pengguna->editUser();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna berhasil diubah!</div>');
    redirect('admin/user');
  }

  public function hapusPengguna($id)
  {
    $this->pengguna->hapusPengguna($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna berhasil dihapus!</div>');
    redirect('admin/user');
  }
}
