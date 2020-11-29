<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Na extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Na_model', 'na');
  }

  public function index()
  {
    $data['prodi'] = $this->na->get_prodi()->result();
    $data['v_matkul']   = $this->na->view_matkul();
    $this->load->view('na', $data);
  }

  public function detail($id)
  {
    $data['judul'] = 'Admin';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['nilai_seleksi'] = $this->na->getNsDetail($id);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/detailNA', $data);
    $this->load->view('templates/footer', $data);
  }

  function get_matkul()
  {
    $id_prodi = $this->input->post('id', TRUE);
    $data = $this->na->get_matkul($id_prodi)->result();
    echo json_encode($data);
  }

  public function tambahNa()
  {
    $this->na->tambahNa();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Kamu Berhasil Menambah Data Nilai Seleksi</div>');
    redirect('admin/na');
  }

  public function editNa()
  {
    $this->na->editNa();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Nilai Seleksi berhasil diubah!</div>');
    redirect('admin/na');
  }

  public function hapusNa($kd_seleksi)
  {
    $this->na->hapusNa($kd_seleksi);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Nilai Seleksi berhasil dihapus!</div>');
    redirect('admin/na');
  }
  public function hapusMa($kd_ma)
  {
    $this->na->hapusMa($kd_ma);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Matrik Keputusan berhasil dihapus!</div>');
    redirect('admin/msaw');
  }

  public function load_asdos()
  {
    $matkul = $_GET['kd_matkul'];
    if ($matkul == 0) {
      $data = $this->na->getNs();
    } else {
      $data = $this->na->getNsWhere($matkul);
    }

    $no = 1;
    foreach ($data as $n) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $n['nim']; ?></td>
        <td><?= $n['matkul']; ?></td>
        <td><?= $n['n_mk']; ?></td>
        <td><?= $n['ipk']; ?></td>
        <td><?= $n['rkmd']; ?></td>
        <td><?= $n['tft']; ?></td>
        <td>
          <a href="" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#ViewDetailModal<?= $n["kd_seleksi"]; ?>"> <i class="fa fa-folder"></i> View Detail</a>
        </td>
      </tr>
      <?php endforeach ?><?php

                        }
                      }
