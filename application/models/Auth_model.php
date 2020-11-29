<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

  public function getUser($email)
  {
    return $this->db->get_where('user', ['email' => $email])->row_array();
  }

  public function daftar()
  {
    $email = $this->input->post('email', true);
    //masuk ke tabel user
    $data = [
      'name' => htmlspecialchars($this->input->post('name', true)),
      'email' => htmlspecialchars($email),
      'image' => 'user.png',
      'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      'role_id' => 2,
      'is_active' => 0,
      'date_created' => date('Y-m-d')
    ];
    //masuk ke tabel calon asdos
    $dataUser = [
      'nama' => htmlspecialchars($this->input->post('name', true)),
      'email' => htmlspecialchars($email),
      'foto' => 'user.png'
    ];

    // siapkan token
    $token = base64_encode(random_bytes(32));
    $user_token = [
      'email' => $email,
      'token' => $token,
      'date_created' => time()
    ];

    //sekali daftar masuk ke tabel user dan calon asdos
    $this->db->insert('user', $data);
    $this->db->insert('calon_asdos', $dataUser);
    //query insert data ke tbl user token
    $this->db->insert('user_token', $user_token);

    $this->_sendEmail($token, 'verify');
  }

  private function _sendEmail($token, $type)
  {
    $config = [
      'protocol'  => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_user' => 'spkasdos@gmail.com',
      'smtp_pass' => 'spk-Asdos19',
      'smtp_port' => 465,
      'mailtype'  => 'html',
      'charset'   => 'utf-8',
      'newline'   => "\r\n"
    ];

    $this->email->initialize($config);

    $this->email->from('spkasdos@gmail.com', 'SPK Asdos Amikom');
    $this->email->to($this->input->post('email'));

    if ($type == 'verify') {
      $this->email->subject('Verifikasi Akun dari SPK Asdos Amikom');
      $this->email->message('Klik disini untuk verifikasi pendaftaran Anda : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Verfikasi Sekarang</a>');
    } else if ($type == 'forgot') {
      $this->email->subject('Reset Password dari SPK Asdos Amikom');
      $this->email->message('Klik disini untuk reset password Anda : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
    }

    if ($this->email->send()) {
      return true;
    } else {
      echo $this->email->print_debugger();
      die;
    }
  }
}
