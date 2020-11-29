<!-- page content -->
<div class="right_col" role="main">
  <div class="row top_tiles">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tabel Detail Kriteria<small>Users</small></h2>
          <a href="" class="btn btn-warning btn-xm pull-right" data-toggle="modal" data-target="#ModalTambahDtKriteria"> <i class="fa fa-plus-square"></i> Tambah</a>
          <div class="clearfix"></div>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="x_content">

          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Kriteria</th>
                <th>Ketentuan Kriteria</th>
                <th>Variabel</th>
                <th>Nilai</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php $no = 1 ?>
                <?php
                $querytb = "SELECT k.kd_kriteria, k.kt_kriteria, d.kd_dtkriteria, d.kd_kriteria, d.kt, d.var, d.n
                            FROM kriteria k 
                            RIGHT JOIN dt_kriteria d 
                            ON k.kd_kriteria = d.kd_dtkriteria 
                          ";
                $tb = $this->db->query($querytb)->result_array();
                ?>
                <?php foreach ($tb as $d) : ?>
                  <?php
                  if ($d['kd_kriteria'] == 1) {
                    $d['kd_kriteria'] = "Tes Microteaching";
                  } elseif ($d['kd_kriteria'] == 2) {
                    $d['kd_kriteria'] = "Tes Wawancara";
                  } elseif ($d['kd_kriteria'] == 3) {
                    $d['kd_kriteria'] = "Tes Akademik";
                  } elseif ($d['kd_kriteria'] == 4) {
                    $d['kd_kriteria'] = "Nilai Matakuliah";
                  } elseif ($d['kd_kriteria'] == 5) {
                    $d['kd_kriteria'] = "IPK";
                  } elseif ($d['kd_kriteria'] == 6) {
                    $d['kd_kriteria'] = "Rekomendasi";
                  } else {
                    $d['kd_kriteria'] = "TFT";
                  }
                  ?>
                  <td><?= $no; ?></td>
                  <td><?= $d["kd_kriteria"]; ?></td>
                  <td><?= $d["kt"]; ?></td>
                  <td><?= $d["var"]; ?></td>
                  <td><?= $d["n"]; ?></td>
                  <td>
                    <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#EditDtKriteriaModal<?= $d["kd_dtkriteria"]; ?>"> <i class="fa fa-pencil"></i> Edit</a>
                    <a href="<?= base_url('dt_kriteria/hapusDt_kriteria/') . $d['kd_dtkriteria']; ?>" class="tombol-hapus btn btn-danger btn-xs"> <i class="fa fa-trash-o"></i> Hapus</a>
                  </td>
              </tr>
              <?php $no++; ?>
            <?php endforeach ?>
            </tbody>
          </table>


        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->