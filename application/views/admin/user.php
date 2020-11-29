<!-- page content -->
<div class="right_col" role="main">
  <div class="row top_tiles">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tabel User</h2>
          <a href="" class="btn btn-warning btn-xm pull-right" data-toggle="modal" data-target="#ModalTambahUser"> <i class="fa fa-plus-square"></i> Tambah</a>
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
                <th>Nama</th>
                <th>Email</th>
                <th>Image</th>
                <th>Hak Akses</th>
                <th>Status</th>
                <th>Tanggal Daftar</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1 ?>
              <?php foreach ($pengguna as $d) : ?>
                <tr>
                  <?php
                    if ($d['role_id'] == 1) {
                      $d['role_id'] = 'Admin';
                    } elseif ($d['role_id'] == 2) {
                      $d['role_id'] = 'Calon Asdos';
                    } else {
                      $d['role_id'] = 'Tidak Terdaftar';
                    }
                    ?>
                  <?php
                    if ($d['is_active'] == 1) {
                      $d['is_active'] = 'Aktif';
                    } elseif ($d['is_active'] == 0) {
                      $d['is_active'] = 'Tidak Aktif';
                    } else {
                      $d['is_active'] = 'Tidak Terdaftar';
                    }
                    ?>
                  <td><?= $no; ?></td>
                  <td><?= $d["name"]; ?></td>
                  <td><?= $d["email"]; ?></td>
                  <td><img style="width: 100px;" src="<?= base_url('assets/images/') . $d['image']; ?>"></td>
                  <td><?= $d["role_id"]; ?></td>
                  <td><?= $d["is_active"]; ?></td>
                  <td><?= (new DateTime($d['date_created']))->format('d F Y'); ?></td>
                  <td>
                    <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#EditPenggunaModal<?= $d["id"]; ?>"> <i class="fa fa-pencil"></i> Edit</a>
                    <a href="<?= base_url('pengguna/hapusPengguna/') . $d['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus ?')"> <i class="fa fa-trash-o"></i> Hapus</a>
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