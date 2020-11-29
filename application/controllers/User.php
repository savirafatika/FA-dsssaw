<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['judul'] = 'User';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/index', $data);
    $this->load->view('templates/footer', $data);
  }

  public function edit()
  {
    $data['judul'] = 'User';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/edit', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $name = $this->input->post('name');
      $email = $this->input->post('email');

      //cek jika ada gambar yang akan diupload
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
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Profil gagal diubah!</div>');
          redirect('user/edit');
        }
      }

      $this->db->set('name', $name);
      $this->db->where('email', $email);
      $this->db->update('user');

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Kamu Berhasil mengubah profil</div>');
      redirect('user/edit');
    }
  }

  public function ubahpass()
  {
    $data['judul'] = 'User';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
    $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[8]|matches[new_password2]');
    $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[8]|matches[new_password1]');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/ubahpass', $data);
      $this->load->view('templates/footer');
    } else {
      $current_password = $this->input->post('current_password');
      $new_password = $this->input->post('new_password1');
      if (!password_verify($current_password, $data['user']['password'])) {
        $this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger" role="alert">Password tidak cocok!</div>');
        redirect('user/ubahpass');
      } else {
        if ($current_password == $new_password) {
          $this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger" role="alert">Password baru tidak boleh sama dengan password lama!</div>');
          redirect('user/ubahpass');
        } else {
          // password sudah ok
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

          $this->db->set('password', $password_hash);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('user');

          $this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success" role="alert">Password berhasil diubah!</div>');
          redirect('user/ubahpass');
        }
      }
    }
  }
}
