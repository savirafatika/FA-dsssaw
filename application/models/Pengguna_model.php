<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_model extends CI_Model
{
  public function getPengguna()
  {
    return $this->db->get('user')->result_array();
  }

  public function tambahPengguna()
  {
    $data = [
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'password' => password_hash('pwdadmin', PASSWORD_DEFAULT),
      'image' => $this->upload->data('file_name'),
      'role_id' => $this->input->post('role_id'),
      'is_active' => $this->input->post('is_active'),
      'date_created' => $this->input->post('date_created')
    ];
    $this->db->insert('user', $data);
  }
  public function tambahPenggunaNopict()
  {
    $data = [
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'password' => password_hash('pwdadmin', PASSWORD_DEFAULT),
      'image' => 'user.png',
      'role_id' => $this->input->post('role_id'),
      'is_active' => $this->input->post('is_active'),
      'date_created' => $this->input->post('date_created')
    ];
    $this->db->insert('user', $data);
  }

  public function editUser()
  {
    $data = [
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'role_id' => $this->input->post('role_id'),
      'is_active' => $this->input->post('is_active'),
      'date_created' => $this->input->post('date_created')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('user', $data);
  }

  public function hapusPengguna($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('user');
    $row = $query->row();
    unlink("./assets/images/$row->image");
    $this->db->delete('user', array('id' => $id));
  }
}
