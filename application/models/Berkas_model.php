<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berkas_model extends CI_Model
{
  public function getCa()
  {
    return $this->db->get('calon_asdos')->result_array();
  }

  public function hasilD()
  {
    $this->db->select('*');
    $this->db->from('calon_asdos');
    $this->db->where('email', $this->session->userdata('email'));
    $data = $this->db->get()->row_array();
    $idca = $data['kd_ca'];
    $query = "SELECT `diterima`.*, `matkul`.* FROM `diterima` JOIN `matkul` ON `diterima`.`id_matkul` = `matkul`.`kd_mt` WHERE `diterima`.`id_ca` = $idca";
    return $this->db->query($query)->result_array();
  }

  public function getValMatkul($nama)
  {
    $query2 = "SELECT COUNT(`ca_pilih`.`id_ca`) as jml, `ca_pilih`.*, `calon_asdos`.`nama` FROM `ca_pilih` JOIN `calon_asdos` ON `ca_pilih`.`id_ca` = `calon_asdos`.`kd_ca` WHERE `nama` LIKE '%$nama%' GROUP BY `ca_pilih`.`id_ca`";
    return $this->db->query($query2)->row_array();
  }

  public function editBerkas()
  {
    $data = [
      'nim' => $this->input->post('nim'),
      'nama' => $this->input->post('nama'),
      'jk' => $this->input->post('jk'),
      'alamat' => $this->input->post('alamat'),
      'nohp' => $this->input->post('nohp'),
      'email' => $this->input->post('email'),
      'prodi' => $this->input->post('prodi'),
      'org' => $this->input->post('org'),
      'sks' => $this->input->post('sks'),
      'ipk' => $this->input->post('ipk'),
      'tft' => $this->input->post('tft'),
      'rkmd' => $this->input->post('rkmd'),
      'periode' => $this->input->post('periode')
    ];
    $this->db->where('kd_ca', $this->input->post('kd_ca'));
    $this->db->update('calon_asdos', $data);
  }

  public function getMatkul($id_matkul, $kdca)
  {
    $query = "SELECT `calon_asdos`.`prodi`, `matkul`.* FROM `calon_asdos` JOIN `matkul` on `calon_asdos`.`prodi` = `matkul`.`prodi_id` WHERE `calon_asdos`.`prodi` = $id_matkul AND `calon_asdos`.`kd_ca`= $kdca";
    return $this->db->query($query)->result_array();
  }
  public function getto($kdca)
  {
    $query = "SELECT `calon_asdos`.`prodi`, `prodi`.* FROM `calon_asdos` JOIN `prodi` on `calon_asdos`.`prodi` = `prodi`.`id_prodi`where  `calon_asdos`.`kd_ca` = $kdca";
    return $this->db->query($query)->result_array();
  }

  public function caPilih($kdca)
  {
    $query = "SELECT `ca_pilih`.*, `matkul`.* FROM `ca_pilih` JOIN `matkul` on `ca_pilih`.`kd_matkul` = `matkul`.`kd_mt` WHERE `id_ca` = $kdca";
    return $this->db->query($query)->result_array();
  }

  public function kdCa()
  {
    $this->db->select('*');
    $this->db->from('calon_asdos');
    $this->db->where('email', $this->session->userdata('email'));
    $data = $this->db->get()->result();
    $idca = 1;
    foreach ($data as $row) {
      $idca = $idca * $row->kd_ca;
    }
    return $idca;
  }
  public function kdCap()
  {
    $this->db->select('*');
    $this->db->from('ca_pilih');
    $this->db->where('email', $this->session->userdata('email'));
    $data = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $kd_cap = 1;
    foreach ($data as $row) {
      $kd_cap = $kd_cap * $row->kd_cap;
    }
    return $kd_cap;
  }
  public function simpanBerkas()
  {
    $idca = $this->kdCa();

    //data pilihan matkul yg dipilih Calon Asdos
    $data = [
      'id_ca' => $idca,
      'kd_matkul' => $this->input->post('matkul'),
      'n_mk' => $this->input->post('nilai')
    ];
    $this->db->insert('ca_pilih', $data);
    $kd_cap = $this->db->insert_id();
    //siapkan data ID Calon Asdos utk di insert ke Nilai Seleksi
    $data = [
      'kd_ca' => $idca,
      'kd_cap' => $kd_cap
    ];
    $this->db->insert('nilai_seleksi', $data);
  }

  public function hapusCap($kd_cap)
  {
    $this->db->where('kd_cap', $kd_cap);
    $this->db->delete('ca_pilih');

    $this->db->where('kd_cap', $kd_cap);
    $this->db->delete('nilai_seleksi');
  }

  public function editBrMatkul()
  {
    $data = [
      'kd_matkul' => $this->input->post('kd_matkul'),
      'n_mk' => $this->input->post('n_mk')
    ];
    $this->db->where('kd_cap', $this->input->post('kd_cap'));
    $this->db->update('ca_pilih', $data);
  }
  public function getBobotK1()
  {
    return $this->db->get_where('kriteria', ['kd_kriteria' => 1])->row_array();
  }
  public function getBobotK2()
  {
    return $this->db->get_where('kriteria', ['kd_kriteria' => 2])->row_array();
  }
  public function getBobotK3()
  {
    return $this->db->get_where('kriteria', ['kd_kriteria' => 3])->row_array();
  }
  public function getBobotK4()
  {
    return $this->db->get_where('kriteria', ['kd_kriteria' => 4])->row_array();
  }
  public function getBobotK5()
  {
    return $this->db->get_where('kriteria', ['kd_kriteria' => 5])->row_array();
  }
  public function getBobotK6()
  {
    return $this->db->get_where('kriteria', ['kd_kriteria' => 6])->row_array();
  }
  public function getBobotK7()
  {
    return $this->db->get_where('kriteria', ['kd_kriteria' => 7])->row_array();
  }
}
