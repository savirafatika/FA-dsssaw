<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Na_model extends CI_Model
{
  public function getNa()
  {
    return $this->db->get('nilai_seleksi')->result_array();
  }

  function get_prodi()
  {
    $query = $this->db->get('prodi');
    return $query;
  }

  function get_matkul($id_prodi)
  {
    $query = $this->db->get_where('matkul', array('prodi_id' => $id_prodi));
    return $query;
  }

  public function getNs()
  {
    $query = "SELECT `ca_pilih`.*, `matkul`.`matkul`, `calon_asdos`.*, `nilai_seleksi`.* FROM `ca_pilih` JOIN `matkul` on `ca_pilih`.`kd_matkul` = `matkul`.`kd_mt` JOIN `calon_asdos` on `calon_asdos`.`kd_ca` = `ca_pilih`.`id_ca` JOIN `nilai_seleksi` on `nilai_seleksi`.`kd_cap` = `ca_pilih`.`kd_cap`";
    return $this->db->query($query)->result_array();
  }
  public function getNsMatriks($kd_seleksi)
  {
    $query = "SELECT `ca_pilih`.*, `matkul`.`matkul`, `calon_asdos`.*, `nilai_seleksi`.* FROM `ca_pilih` JOIN `matkul` on `ca_pilih`.`kd_matkul` = `matkul`.`kd_mt` JOIN `calon_asdos` on `calon_asdos`.`kd_ca` = `ca_pilih`.`id_ca` JOIN `nilai_seleksi` on `nilai_seleksi`.`kd_cap` = `ca_pilih`.`kd_cap` WHERE `nilai_seleksi`.`kd_seleksi` = $kd_seleksi";
    return $this->db->query($query)->result_array();
  }
  public function testing()
  {
    $query = "SELECT `dt_kriteriaku`.*, `sub_kriteria`.`nama_kriteria`, `bobot_kriteria`.`nilai_bobot` FROM `dt_kriteriaku` JOIN `bobot_kriteria` ON `dt_kriteriaku`.`id_bobot` = `bobot_kriteria`.`id_bobot`JOIN `sub_kriteria` ON `dt_kriteriaku`.`id_sub_kriteria` = `sub_kriteria`.`id_sub_kriteria`";
    return $this->db->query($query)->result_array();
  }
  public function bobotc1_1()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 1);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc1_2()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 2);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc1_3()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 3);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc1_4()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 4);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc1_5()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 5);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc1_6()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 6);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function getBobotK1($c1)
  {
    $bobot1 = $this->bobotc1_1();
    $bobot2 = $this->bobotc1_2();
    $bobot3 = $this->bobotc1_3();
    $bobot4 = $this->bobotc1_4();
    $bobot5 = $this->bobotc1_5();
    $bobot6 = $this->bobotc1_6();
    if ($c1 <= 50) {
      $c1 = $bobot6;
    } elseif ($c1 > 50 && $c1 <= 60) {
      $c1 = $bobot5;
    } elseif ($c1 > 60 && $c1 <= 70) {
      $c1 = $bobot4;
    } elseif ($c1 > 70 && $c1 <= 80) {
      $c1 = $bobot3;
    } elseif ($c1 > 80 && $c1 <= 90) {
      $c1 = $bobot2;
    } elseif ($c1 > 90) {
      $c1 = $bobot1;
    } else {
      $c1 = 999;
    }
    return $c1;
  }
  public function bobotc2_1()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 7);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc2_2()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 8);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc2_3()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 9);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc2_4()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 10);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc2_5()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 11);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc2_6()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 12);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function getBobotK2($c2)
  {
    $bobot1 = $this->bobotc2_1();
    $bobot2 = $this->bobotc2_2();
    $bobot3 = $this->bobotc2_3();
    $bobot4 = $this->bobotc2_4();
    $bobot5 = $this->bobotc2_5();
    $bobot6 = $this->bobotc2_6();
    if ($c2 <= 50) {
      $c2 = $bobot6;
    } elseif ($c2 > 50 && $c2 <= 60) {
      $c2 = $bobot5;
    } elseif ($c2 > 60 && $c2 <= 70) {
      $c2 = $bobot4;
    } elseif ($c2 > 70 && $c2 <= 80) {
      $c2 = $bobot3;
    } elseif ($c2 > 80 && $c2 <= 90) {
      $c2 = $bobot2;
    } elseif ($c2 > 90) {
      $c2 = $bobot1;
    } else {
      $c2 = 999;
    }
    return $c2;
  }
  public function bobotc3_1()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 13);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc3_2()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 14);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc3_3()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 15);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc3_4()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 16);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc3_5()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 17);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc3_6()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 18);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function getBobotK3($c3)
  {
    $bobot1 = $this->bobotc3_1();
    $bobot2 = $this->bobotc3_2();
    $bobot3 = $this->bobotc3_3();
    $bobot4 = $this->bobotc3_4();
    $bobot5 = $this->bobotc3_5();
    $bobot6 = $this->bobotc3_6();
    if ($c3 <= 50) {
      $c3 = $bobot6;
    } elseif ($c3 > 50 && $c3 <= 60) {
      $c3 = $bobot5;
    } elseif ($c3 > 60 && $c3 <= 70) {
      $c3 = $bobot4;
    } elseif ($c3 > 70 && $c3 <= 80) {
      $c3 = $bobot3;
    } elseif ($c3 > 80 && $c3 <= 90) {
      $c3 = $bobot2;
    } elseif ($c3 > 90) {
      $c3 = $bobot1;
    } else {
      $c3 = 999;
    }
    return $c3;
  }
  public function bobotc4_1()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 19);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc4_2()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 20);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function getBobotK4($c4)
  {
    $bobot1 = $this->bobotc4_1();
    $bobot2 = $this->bobotc4_2();
    if ($c4 === 'A') {
      $c4 = $bobot1;
    } elseif ($c4 === 'B') {
      $c4 = $bobot2;
    } else {
      $c4 = 999;
    }
    return $c4;
  }
  public function bobotc5_1()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 21);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc5_2()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 22);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc5_3()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 23);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc5_4()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 24);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc5_5()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 25);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc5_6()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 26);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function getBobotK5($c5)
  {
    $bobot1 = $this->bobotc5_1();
    $bobot2 = $this->bobotc5_2();
    $bobot3 = $this->bobotc5_3();
    $bobot4 = $this->bobotc5_4();
    $bobot5 = $this->bobotc5_5();
    $bobot6 = $this->bobotc5_6();
    if ($c5 <= 3.00) {
      $c5 = $bobot6;
    } elseif ($c5 > 3.00 && $c5 <= 3.50) {
      $c5 = $bobot5;
    } elseif ($c5 > 3.50 && $c5 <= 3.60) {
      $c5 = $bobot4;
    } elseif ($c5 > 3.60 && $c5 <= 3.70) {
      $c5 = $bobot3;
    } elseif ($c5 > 3.70 && $c5 <= 3.80) {
      $c5 = $bobot2;
    } elseif ($c5 > 3.90) {
      $c5 = $bobot1;
    } else {
      $c5 = 999;
    }
    return $c5;
  }
  public function bobotc6_1()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 27);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc6_2()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 28);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function getBobotK6($c6)
  {
    $bobot1 = $this->bobotc6_1();
    $bobot2 = $this->bobotc6_2();
    if ($c6 === 'N') {
      $c6 = $bobot2;
    } elseif ($c6 === 'Y') {
      $c6 = $bobot1;
    } else {
      $c6 = 999;
    }
    return $c6;
  }
  public function bobotc7_1()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 29);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function bobotc7_2()
  {
    $this->db->select('*');
    $this->db->from('dt_kriteriaku');
    $this->db->where('id', 30);
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $bobot = $row->nilai_bobot;
    }
    return $bobot;
  }
  public function getBobotK7($c7)
  {
    $bobot1 = $this->bobotc7_1();
    $bobot2 = $this->bobotc7_2();
    if ($c7 === 'N') {
      $c7 = $bobot2;
    } elseif ($c7 === 'Y') {
      $c7 = $bobot1;
    } else {
      $c7 = 999;
    }
    return $c7;
  }

  public function insertMatriksA($nim, $kd_matkul, $kd_seleksi)
  {
    $kriteria = $this->getNsMatriks($kd_seleksi);
    foreach ($kriteria as $k) {
      $c1 = $k['tm'];
      $c2 = $k['tw'];
      $c3 = $k['ta'];
      $c4 = $k['n_mk'];
      $c5 = $k['ipk'];
      $c6 = $k['rkmd'];
      $c7 = $k['tft'];
    }
    $C1 = $this->getBobotK1($c1);
    $C2 = $this->getBobotK2($c2);
    $C3 = $this->getBobotK3($c3);
    $C4 = $this->getBobotK4($c4);
    $C5 = $this->getBobotK5($c5);
    $C6 = $this->getBobotK6($c6);
    $C7 = $this->getBobotK7($c7);
    $data = [
      'nim' => $nim,
      'kd_matkul' => $kd_matkul,
      'k1' => $C1,
      'k2' => $C2,
      'k3' => $C3,
      'k4' => $C4,
      'k5' => $C5,
      'k6' => $C6,
      'k7' => $C7
    ];
    $this->db->insert('matrik_a', $data);
  }

  public function getNsWhere($matkul)
  {
    $query = "SELECT DISTINCT `nilai_seleksi`.`kd_seleksi`, `nilai_seleksi`.`kd_ca`, `nilai_seleksi`.`n_pre`, `nilai_seleksi`.`p_mtr`, `nilai_seleksi`.`n_tj`, `nilai_seleksi`.`n_pn`, `nilai_seleksi`.`n_skp`, `nilai_seleksi`.`n_mt`, `nilai_seleksi`.`n_tt`, `nilai_seleksi`.`n_tp`, `ca_pilih`.*, `matkul`.`kd_mt`, `matkul`.`matkul`, `calon_asdos`.* FROM `nilai_seleksi` JOIN `ca_pilih` ON `ca_pilih`.`id_ca` = `nilai_seleksi`.`kd_ca` JOIN `calon_asdos` ON `calon_asdos`.`kd_ca` = `nilai_seleksi`.`kd_ca` JOIN `matkul` ON `ca_pilih`.`kd_matkul` = `matkul`.`kd_mt` WHERE `ca_pilih`.`kd_matkul` = $matkul GROUP BY `nilai_seleksi`.`kd_ca`, `ca_pilih`.`kd_matkul`";
    return $this->db->query($query)->result_array();
  }

  public function tambahNa()
  {
    $data = [
      'kd_seleksi' => $this->input->post('kd_seleksi'),
      'nim' => $this->input->post('nim'),
      'n_pre' => $this->input->post('n_pre'), //nilai presentasi
      'p_mtr' => $this->input->post('p_mtr'), //nilai penyampaian materi
      'n_tj' => $this->input->post('n_tj'), //nilai tanya jawab
      'n_pn' => $this->input->post('n_pn'), //nilai penampilan
      'n_skp' => $this->input->post('n_skp'), //nilai sikap
      'n_mt' => $this->input->post('n_mt'), //nilai motivasi
      'n_tt' => $this->input->post('n_tt'), //nilai tes teori
      'n_tp' => $this->input->post('n_tp'), //nilai tes praktek
      'n_mk' => $this->input->post('n_mk'), //nilai matakuliah
      'ipk' => $this->input->post('ipk'),
      'rkmd' => $this->input->post('rkmd'),
      'tft' => $this->input->post('tft')
    ];
    $this->db->insert('nilai_seleksi', $data);
  }


  public function editNa()
  {
    $kd_seleksi = $this->input->post('kd_seleksi');
    $nim = $this->input->post('nim');
    $kd_matkul = $this->input->post('kd_matkul');
    $data = [
      'n_pre' => $this->input->post('n_pre'),
      'p_mtr' => $this->input->post('p_mtr'),
      'n_tj' => $this->input->post('n_tj'),
      'n_pn' => $this->input->post('n_pn'),
      'n_skp' => $this->input->post('n_skp'),
      'n_mt' => $this->input->post('n_mt'),
      'n_tt' => $this->input->post('n_tt'),
      'n_tp' => $this->input->post('n_tp')
    ];

    $this->db->where('kd_seleksi', $kd_seleksi);
    $this->db->update('nilai_seleksi', $data);

    $kd_cap = $this->input->post('kd_cap');
    $c1 = [
      'n_pre' => $this->input->post('n_pre'),
      'p_mtr' => $this->input->post('p_mtr'),
      'n_tj' => $this->input->post('n_tj')
    ];
    $rc1 = array_filter($c1);
    $created = array_sum($rc1) / count($rc1);

    $c2 = [
      'n_pn' => $this->input->post('n_pn'),
      'n_skp' => $this->input->post('n_skp'),
      'n_mt' => $this->input->post('n_mt')
    ];
    $rc2 = array_filter($c2);
    $created2 = array_sum($rc2) / count($rc2);

    $c3 = [
      'n_tt' => $this->input->post('n_tt'),
      'n_tp' => $this->input->post('n_tp')
    ];
    $rc3 = array_filter($c3);
    $created3 = array_sum($rc3) / count($rc3);

    $this->db->set('tm', $created);
    $this->db->set('tw', $created2);
    $this->db->set('ta', $created3);
    $this->db->where('kd_cap', $kd_cap);
    $this->db->update('nilai_seleksi');

    $this->insertMatriksA($nim, $kd_matkul, $kd_seleksi);
  }

  public function maxk1()
  {
    $query = "SELECT MAX(`k1`) FROM `matrik_a` WHERE `kd_matkul`=38";
  }

  public function editMatkul()
  {
    $data = [
      'kd_seleksi' => $this->input->post('kd_seleksi'),
      'nim' => $this->input->post('nim'),
      'n_pre' => $this->input->post('n_pre'), //nilai presentasi
      'p_mtr' => $this->input->post('p_mtr'), //nilai penyampaian materi
      'n_tj' => $this->input->post('n_tj'), //nilai tanya jawab
      'n_pn' => $this->input->post('n_pn'), //nilai penampilan
      'n_skp' => $this->input->post('n_skp'), //nilai sikap
      'n_mt' => $this->input->post('n_mt'), //nilai motivasi
      'n_tt' => $this->input->post('n_tt'), //nilai tes teori
      'n_tp' => $this->input->post('n_tp'), //nilai tes praktek
      'n_mk' => $this->input->post('n_mk'), //nilai matakuliah
      'ipk' => $this->input->post('ipk'),
      'rkmd' => $this->input->post('rkmd'),
      'tft' => $this->input->post('tft')
    ];
    $this->db->where('kd_seleksi', $this->input->post('kd_seleksi'));
    $this->db->update('nilai_seleksi', $data);
  }

  public function hapusMatkul($kd_seleksi)
  {
    $data['na'] = $this->db->get_where('nilai_seleksi', ['kd_seleksi' => $kd_seleksi])->row_array();
    $this->db->where('kd_seleksi', $kd_seleksi);
    $this->db->delete('nilai_seleksi');
  }
  public function hapusMa($kd_ma)
  {
    $this->db->where('kd_ma', $kd_ma);
    $this->db->delete('matrik_a');
  }
}
