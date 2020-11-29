<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dt_kriteria_model extends CI_Model
{
  public function getDt_kriteria()
  {
    return $this->db->get('dt_kriteria')->result_array();
  }

  public function tambahDt_kriteria()
  {
    $data = [
      'kd_kriteria' => $this->input->post('kd_kriteria'),
      'kt' => $this->input->post('kt'),
      'var' => $this->input->post('var'),
      'n' => $this->input->post('n')
    ];
    $this->db->insert('dt_kriteria', $data);
  }

  public function editDt_kriteria()
  {
    $data = [
      'kd_kriteria' => $this->input->post('kd_kriteria'),
      'kt' => $this->input->post('kt'),
      'var' => $this->input->post('var'),
      'n' => $this->input->post('n')
    ];
    $this->db->where('kd_dtkriteria', $this->input->post('kd_dtkriteria'));
    $this->db->update('dt_kriteria', $data);
  }

  public function hapusDt_kriteria($kd_dtkriteria)
  {
    $data['dt_kriteria'] = $this->db->get_where('dt_kriteria', ['kd_dtkriteria' => $kd_dtkriteria])->row_array();
    $this->db->where('kd_dtkriteria', $kd_dtkriteria);
    $this->db->delete('dt_kriteria');
  }
}
