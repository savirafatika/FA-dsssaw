<!-- page content -->
<div class="right_col" role="main">
  <div class="row top_tiles">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tabel Dosen<small>Users</small></h2>
          <a href="" class="btn btn-warning btn-xm pull-right" data-toggle="modal" data-target="#ModalTambahDosen"> <i class="fa fa-plus-square"></i> Tambah</a>
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
                <th>NIK</th>
                <th>Nama</th>
                <th>nohp</th>
                <th>Email</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php $no = 1 ?>
                <?php foreach ($dosen as $d) : ?>
                  <td><?= $no; ?></td>
                  <td><?= $d["nik"]; ?></td>
                  <td><?= $d["nama"]; ?></td>
                  <td><?= $d["nohp"]; ?></td>
                  <td><?= $d['email']; ?></td>
                  <td>
                    <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#EditDosenModal<?= $d["nik"]; ?>"> <i class="fa fa-pencil"></i> Edit</a>
                    <a href="<?= base_url('dosen/hapusDosen/') . $d['nik']; ?>" class="tombol-hapus btn btn-danger btn-xs"> <i class="fa fa-trash-o"></i> Hapus</a>
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