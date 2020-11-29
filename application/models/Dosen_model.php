<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen_model extends CI_Model
{
  public function getDosen()
  {
    return $this->db->get('dosen')->result_array();
  }

  public function tambahDosen()
  {
    $data = [
      'nik' => $this->input->post('nik'),
      'nama' => $this->input->post('nama'),
      'nohp' => $this->input->post('nohp'),
      'email' => $this->input->post('email')
    ];
    $this->db->insert('dosen', $data);
  }

  public function editDosen()
  {
    $data = [
      'nik' => $this->input->post('nik'),
      'nama' => $this->input->post('nama'),
      'nohp' => $this->input->post('nohp'),
      'email' => $this->input->post('email')
    ];
    $this->db->where('nik', $this->input->post('nik'));
    $this->db->update('dosen', $data);
  }

  public function hapusDosen($nik)
  {
    $data['dosen'] = $this->db->get_where('dosen', ['nik' => $nik])->row_array();
    $this->db->where('nik', $nik);
    $this->db->delete('dosen');
  }
}
