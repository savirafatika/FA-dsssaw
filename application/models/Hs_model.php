<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hs_model extends CI_Model
{
  public function hsFinal()
  {
    $query = "SELECT * FROM `hasil_seleksi` ORDER BY `hasil_seleksi`.`total` DESC";
    return $this->db->query($query)->result_array();
  }

  public function lihatHasil()
  {
    $nim = $this->input->post('nim');
    $result = array();
    foreach ($nim as $key => $val) {
      $result[] = array(
        "nim"  => $_POST['nim'][$key],
        "nama"  => $_POST['nama'][$key],
        "total"  => $_POST['total'][$key]
      );
    }
    $this->db->insert_batch('hasil_seleksi', $result);
  }

  public function terimaCa($id)
  {
    $query = "SELECT `hasil_seleksi`.*, `ca_pilih`.*, `matkul`.`matkul`, `calon_asdos`.*, `nilai_seleksi`.* FROM `ca_pilih` JOIN `matkul` on `ca_pilih`.`kd_matkul` = `matkul`.`kd_mt` JOIN `calon_asdos` on `calon_asdos`.`kd_ca` = `ca_pilih`.`id_ca` JOIN `nilai_seleksi` on `nilai_seleksi`.`kd_cap` = `ca_pilih`.`kd_cap` JOIN `hasil_seleksi` ON `calon_asdos`.`nim` = `hasil_seleksi`.`nim` WHERE `hasil_seleksi`.`kd_hs` = $id GROUP BY `hasil_seleksi`.`kd_hs`";
    $hsl = $this->db->query($query)->row_array();

    $data = [
      'id_ca' => $hsl['kd_ca'],
      'id_matkul' => $hsl['kd_matkul'],
      'total' => $hsl['total'],
      'status' => 'Diterima'
    ];
    $this->db->insert('diterima', $data);
    $this->db->where('kd_hs', $id);
    $this->db->delete('hasil_seleksi');
  }

  public function tolakCa($id)
  {
    $query = "SELECT `hasil_seleksi`.*, `ca_pilih`.*, `matkul`.`matkul`, `calon_asdos`.*, `nilai_seleksi`.* FROM `ca_pilih` JOIN `matkul` on `ca_pilih`.`kd_matkul` = `matkul`.`kd_mt` JOIN `calon_asdos` on `calon_asdos`.`kd_ca` = `ca_pilih`.`id_ca` JOIN `nilai_seleksi` on `nilai_seleksi`.`kd_cap` = `ca_pilih`.`kd_cap` JOIN `hasil_seleksi` ON `calon_asdos`.`nim` = `hasil_seleksi`.`nim` WHERE `hasil_seleksi`.`kd_hs` = $id GROUP BY `hasil_seleksi`.`kd_hs`";
    $hsl = $this->db->query($query)->row_array();

    $data = [
      'id_ca' => $hsl['kd_ca'],
      'id_matkul' => $hsl['kd_matkul'],
      'total' => $hsl['total'],
      'status' => 'Tidak Diterima'
    ];
    $this->db->insert('diterima', $data);
    $this->db->where('kd_hs', $id);
    $this->db->delete('hasil_seleksi');
  }
}
