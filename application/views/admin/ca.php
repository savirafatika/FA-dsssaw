<!-- page content -->
<div class="right_col" role="main">
  <div class="row top_tiles">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tabel Pendaftar<small>Users</small></h2>
          <a href="" class="btn btn-warning btn-xm pull-right" data-toggle="modal" data-target="#ModalTambahCa"> <i class="fa fa-plus-square"></i> Tambah</a>
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
                <th>Foto</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Prodi</th>
                <th>Organisasi</th>
                <th>SKS</th>
                <th>IPK</th>
                <th>TFT</th>
                <th>Rekomendasi</th>
                <th>Periode</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php $no = 1 ?>
                <?php foreach ($ca as $c) : ?>
                  <td><?= $no; ?></td>
                  <td><img style="width: 100px;" src="<?= base_url('assets/images/') . $c['foto']; ?>"></td>
                  <td><?= $c["nim"]; ?></td>
                  <td><?= $c["nama"]; ?></td>
                  <td><?= $c["jk"]; ?></td>
                  <td><?= $c["alamat"]; ?></td>
                  <td><?= $c["nohp"]; ?></td>
                  <td><?= $c["email"]; ?></td>
                  <td><?= $c['prodi']; ?></td>
                  <td><?= $c["org"]; ?></td>
                  <td><?= $c["sks"]; ?></td>
                  <td><?= $c["ipk"]; ?></td>
                  <td><?= $c["tft"]; ?></td>
                  <td><?= $c["rkmd"]; ?></td>
                  <td><?= $c["periode"]; ?></td>
                  <td>
                    <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#EditCaModal<?= $c["kd_ca"]; ?>"> <i class="fa fa-pencil"></i> Edit</a>
                    <a href="<?= base_url('ca/hapusCa/') . $c['kd_ca']; ?>" class="tombol-hapus btn btn-danger btn-xs"> <i class="fa fa-trash-o"></i> Hapus</a>
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