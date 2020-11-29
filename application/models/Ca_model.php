<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ca_model extends CI_Model
{
  public function getCa()
  {
    return $this->db->get('calon_asdos')->result_array();
  }

  public function tambahCa()
  {
    $data = [
      'foto' => $this->upload->data('file_name'),
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
    $dataUser = [
      'name' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
      'password' => password_hash($this->input->post('nim'), PASSWORD_DEFAULT),
      'image' => $this->upload->data('file_name'),
      'role_id' => 2,
      'is_active' => 1,
      'date_created' => date('Y-m-d')
    ];
    $this->db->insert('calon_asdos', $data);
    $this->db->insert('user', $dataUser);
  }

  public function tambahCaNopict()
  {
    $data = [
      'foto' => 'user.png',
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
    $dataUser = [
      'name' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
      'password' => password_hash($this->input->post('nim'), PASSWORD_DEFAULT),
      'image' => $this->upload->data('file_name'),
      'role_id' => 2,
      'is_active' => 1,
      'date_created' => date('Y-m-d')
    ];
    $this->db->insert('calon_asdos', $data);
    $this->db->insert('user', $dataUser);
  }

  public function editCa()
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

  public function hapusCa($kd_ca)
  {
    $this->db->where('kd_ca', $kd_ca);
    $query = $this->db->get('calon_asdos');
    $row = $query->row();
    unlink("./assets/images/$row->foto");
    $this->db->delete('calon_asdos', array('kd_ca' => $kd_ca));
  }
}
