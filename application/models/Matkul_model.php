<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul_model extends CI_Model
{
  public function getMatkul()
  {
    return $this->db->get('matkul')->result_array();
  }

  public function tambahMatkul()
  {
    $data = [
      'kd_mt' => $this->input->post('kd_mt'),
      'matkul' => $this->input->post('matkul'),
      'prodi_id' => $this->input->post('prodi_id')
    ];
    $this->db->insert('matkul', $data);
  }

  public function editMatkul()
  {
    $data = [
      'kd_mt' => $this->input->post('kd_mt'),
      'matkul' => $this->input->post('matkul'),
      'prodi_id' => $this->input->post('prodi_id')
    ];
    $this->db->where('kd_mt', $this->input->post('kd_mt'));
    $this->db->update('matkul', $data);
  }

  public function hapusMatkul($kd_mt)
  {
    $data['matkul'] = $this->db->get_where('matkul', ['kd_mt' => $kd_mt])->row_array();
    $this->db->where('kd_mt', $kd_mt);
    $this->db->delete('matkul');
  }
}
