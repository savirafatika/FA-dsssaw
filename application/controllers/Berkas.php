<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berkas extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('Berkas_model', 'bm');
  }

  public function index()
  {
    $data['judul'] = 'User';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['c_a'] = $this->db->get_where('calon_asdos', ['email' => $this->session->userdata('email')])->row_array();
    $data["ca"] = $this->db->get('calon_asdos')->result_array();
    $data["cp"] = $this->db->get('ca_pilih')->result_array();
    $data["matkul"] = $this->db->get('matkul')->result_array();
    $data["prodi"] = $this->db->get('prodi')->result_array();
    $kdca = $this->bm->kdCa();
    $data['prodinya'] = $this->bm->getto($kdca);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('berkas/index', $data);
    $this->load->view('templates/footer', $data);
  }
  public function matkul()
  {
    if (!$this->session->flashdata('prodi')) {
      redirect('berkas/index');
    }
    $data['judul'] = 'User';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $query = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $nama = $query['name'];
    $data['valMatkul'] = $this->bm->getValMatkul($nama);

    $data["ca"] = $this->db->get('calon_asdos')->result_array();
    $data["cap"] = $this->db->get('ca_pilih')->result_array();
    $kdca = $this->bm->kdCa();
    $data["cp"] = $this->bm->caPilih($kdca);
    $id_matkul = $this->session->flashdata('prodi');
    $data['matkul'] = $this->bm->getMatkul($id_matkul, $kdca);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('berkas/matkul', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('berkas/edit_matkul', $data);
  }

  public function editBerkas()
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
        $old_image = $data['user']['foto'];
        if ($old_image != 'user.png') {
          unlink(FCPATH . 'assets/images/' . $old_image);
        }
        $new_image = $this->upload->data('file_name');
        // insert image ke tabel user pada kolom image
        $this->db->set('foto', $new_image);
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Calon Asdos gagal diubah!</div>');
        redirect('berkas/index');
      }
    }
    $this->load->model('Berkas_model', 'bm');
    $this->bm->editBerkas();
    $id_matkul = $this->input->post('prodi');
    $this->session->set_flashdata('prodi', $id_matkul);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Calon Asdos berhasil diubah, Silahkan pilih matakuliah!</div>');
    redirect('berkas/matkul');
  }

  public function simpanMatkul()
  {
    $this->bm->simpanBerkas();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sipp, Berhasil Memilih Matakuliah!</div>');
    redirect('berkas/index');
  }

  public function hapusBerkas($kd_cap)
  {
    $this->bm->hapusCap($kd_cap);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pilihan Matakuliah berhasil dihapus!</div>');
    redirect('berkas/index');
  }

  public function editBrMatkul()
  {
    $this->bm->editBrMatkul();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pilihan Matakuliah berhasil diubah!</div>');
    redirect('berkas/index');
  }
  public function hasil()
  {
    $data['judul'] = 'User';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data["hasil"] = $this->bm->hasilD();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('berkas/hasil', $data);
    $this->load->view('templates/footer', $data);
  }
}
