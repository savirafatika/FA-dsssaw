<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper('admin_helper');
    cek_akses_login();
  }

  public function index()
  {
    $data['judul'] = 'Admin';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data["event"] = $this->db->get('event')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/home', $data);
    $this->load->view('templates/footer', $data);
  }
  public function user()
  {
    $data['judul'] = 'Admin';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data["pengguna"] = $this->db->get('user')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/user', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('admin/modal/modal_tambah_user');
    $this->load->view('admin/modal/modal_edit_user', $data);
  }
  public function dosen()
  {
    $data['judul'] = 'Admin';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data["dosen"] = $this->db->get('dosen')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/dosen', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('admin/modal/modal_tambah_dosen');
    $this->load->view('admin/modal/modal_edit_dosen', $data);
  }
  public function matkul()
  {
    $data['judul'] = 'Admin';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data["matkul"] = $this->db->get('matkul')->result_array();
    $data["prodi"] = $this->db->get('prodi')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/matkul', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('admin/modal/modal_tambah_matkul');
    $this->load->view('admin/modal/modal_edit_matkul', $data);
  }
  public function kriteria()
  {
    $data['judul'] = 'Admin';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data["kriteria"] = $this->db->get('kriteria')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/kriteria', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('admin/modal/modal_tambah_kriteria');
    $this->load->view('admin/modal/modal_edit_kriteria', $data);
  }
  public function dt_kriteria()
  {
    $data['judul'] = 'Admin';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data["dt_kriteria"] = $this->db->get('dt_kriteria')->result_array();
    $data["kriteria"] = $this->db->get('kriteria')->result_array();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/dt_kriteria', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('admin/modal/modal_tambah_dt_kriteria');
    $this->load->view('admin/modal/modal_edit_dt_kriteria', $data);
  }
  public function ca()
  {
    $data['judul'] = 'Admin';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data["ca"] = $this->db->get('calon_asdos')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/ca', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('admin/modal/modal_tambah_ca');
    $this->load->view('admin/modal/modal_edit_ca', $data);
  }
  public function na()
  {
    $data['judul'] = 'Admin';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data["matkul"] = $this->db->get('matkul')->result_array();
    $data["prodi"] = $this->db->get('prodi')->result_array();
    $data["ca"] = $this->db->get('calon_asdos')->result_array();
    $this->load->model('Na_model', 'ns');
    $data["na"] = $this->ns->getNs();
    $data["nilai_seleksi"] = $this->db->get('nilai_seleksi')->result_array();
    $data["ma"] = $this->db->get('matrik_a')->result_array();
    $data["mb"] = $this->db->get('matrik_b')->result_array();
    $data["mc"] = $this->db->get('matrik_c')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/na', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('admin/modal/detail_ns_modal', $data);
  }

  public function msaw()
  {
    $this->load->model('Berkas_model', 'bm');
    $this->load->model('Matrik_model', 'matrik');
    $data['judul'] = 'Admin';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data["ma"] = $this->db->get('matrik_a')->result_array();
    $data['tr'] = $this->matrik->tampilR();
    $data["prodi"] = $this->db->get('prodi')->result_array();
    $data["na"] = $this->db->get('nilai_seleksi')->result_array();
    $data['max'] = $this->matrik->MaxC1();
    $data['max2'] = $this->matrik->MaxC2();
    $data['max3'] = $this->matrik->MaxC3();
    $data['max4'] = $this->matrik->MaxC4();
    $data['max5'] = $this->matrik->MaxC5();
    $data['max6'] = $this->matrik->MaxC6();
    $data['max7'] = $this->matrik->MaxC7();
    $data['b1'] = $this->bm->getBobotK1();
    $data['b2'] = $this->bm->getBobotK2();
    $data['b3'] = $this->bm->getBobotK3();
    $data['b4'] = $this->bm->getBobotK4();
    $data['b5'] = $this->bm->getBobotK5();
    $data['b6'] = $this->bm->getBobotK6();
    $data['b7'] = $this->bm->getBobotK7();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/msaw', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('admin/modal/tampil_rangking', $data);
  }
  public function hs()
  {
    $this->load->model('Hs_model', 'hs');
    $data['judul'] = 'Admin';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data["prodi"] = $this->db->get('prodi')->result_array();
    $data["hs"] = $this->hs->hsFinal();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/hs', $data);
    $this->load->view('templates/footer', $data);
  }
  public function cs()
  {
    $data['judul'] = 'Admin';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/cs', $data);
    $this->load->view('templates/footer', $data);
  }
}
