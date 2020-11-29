<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria_model extends CI_Model
{
  public function getKriteria()
  {
    return $this->db->get('kriteria')->result_array();
  }

  public function tambahKriteria()
  {
    $data = [
      'kt_kriteria' => $this->input->post('kt_kriteria'),
      'bobot_pref' => $this->input->post('bobot_pref')
    ];
    $this->db->insert('kriteria', $data);
  }

  public function editKriteria()
  {
    $data = [
      'kt_kriteria' => $this->input->post('kt_kriteria'),
      'bobot_pref' => $this->input->post('bobot_pref')
    ];
    $this->db->where('kd_kriteria', $this->input->post('kd_kriteria'));
    $this->db->update('kriteria', $data);
  }

  public function hapusKriteria($kd_kriteria)
  {
    $data['kriteria'] = $this->db->get_where('kriteria', ['kd_kriteria' => $kd_kriteria])->row_array();
    $this->db->where('kd_kriteria', $kd_kriteria);
    $this->db->delete('kriteria');
  }
}
