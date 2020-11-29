<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matrik_model extends CI_Model
{
  public function tampilR()
  {
    $query = "SELECT `calon_asdos`.`nama`, `matrik_a`.* FROM `matrik_a` JOIN `calon_asdos` on `matrik_a`.`nim` = `calon_asdos`.`nim`";
    return $this->db->query($query)->result_array();
  }
  public function MaxC1()
  {
    $queryMax = "SELECT MAX(`matrik_a`.`k1`) as C1 FROM `matrik_a`";
    return $this->db->query($queryMax)->row_array();
  }
  public function MaxC2()
  {
    $queryMax = "SELECT MAX(`matrik_a`.`k2`) as C2 FROM `matrik_a`";
    return $this->db->query($queryMax)->row_array();
  }
  public function MaxC3()
  {
    $queryMax = "SELECT MAX(`matrik_a`.`k3`) as C3 FROM `matrik_a`";
    return $this->db->query($queryMax)->row_array();
  }
  public function MaxC4()
  {
    $queryMax = "SELECT MAX(`matrik_a`.`k4`) as C4 FROM `matrik_a`";
    return $this->db->query($queryMax)->row_array();
  }
  public function MaxC5()
  {
    $queryMax = "SELECT MAX(`matrik_a`.`k5`) as C5 FROM `matrik_a`";
    return $this->db->query($queryMax)->row_array();
  }
  public function MaxC6()
  {
    $queryMax = "SELECT MAX(`matrik_a`.`k6`) as C6 FROM `matrik_a`";
    return $this->db->query($queryMax)->row_array();
  }
  public function MaxC7()
  {
    $queryMax = "SELECT MAX(`matrik_a`.`k7`) as C7 FROM `matrik_a`";
    return $this->db->query($queryMax)->row_array();
  }
}
