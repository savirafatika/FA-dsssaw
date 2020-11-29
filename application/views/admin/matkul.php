<!-- page content -->
<div class="right_col" role="main">
  <div class="row top_tiles">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tabel Matakuliah<small>Users</small></h2>
          <a href="" class="btn btn-warning btn-xm pull-right" data-toggle="modal" data-target="#ModalTambahMatkul"> <i class="fa fa-plus-square"></i> Tambah</a>
          <ul class="nav navbar-right panel_toolbox">
          </ul>
          <div class="clearfix"></div>
          <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="x_content">

          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Matkuliah</th>
                <th>Prodi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $querytb = "SELECT p.id_prodi, p.prodi, m.kd_mt, m.matkul, m.prodi_id
                    FROM prodi p
                    RIGHT JOIN matkul m
                    ON p.id_prodi = m.prodi_id 
                    ";
                $pr = $this->db->query($querytb)->result_array();
                ?>
                <?php $no = 1; ?>
                <?php foreach ($pr as $p) : ?>
                  <td><?= $no; ?></td>
                  <td><?= $p['matkul']; ?></td>
                  <td><?= $p['prodi']; ?></td>
                  <td>
                    <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#EditMatkulModal<?= $p["kd_mt"]; ?>"> <i class="fa fa-pencil"></i> Edit</a>
                    <a href="<?= base_url('matkul/hapusMatkul/') . $p['kd_mt']; ?>" class="tombol-hapus btn btn-danger btn-xs"> <i class="fa fa-trash-o"></i> Hapus</a>
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