<!-- page content -->
<div class="right_col" role="main">
  <div class="row top_tiles">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tabel Hasil Seleksi<small>Users</small></h2>
          <ul class="nav navbar-right panel_toolbox">
          </ul>
          <div class="clearfix"></div>
          <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="x_content">

          <div class="clearfix" style="padding-bottom: 10px;"></div>
          <?= form_open_multipart('hs/tambahPengumuman'); ?>
          <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" style="text-align:center">
            <thead>
              <tr>
                <th style="text-align:center">No</th>
                <th style="text-align:center">NIM</th>
                <th style="text-align:center">Nama</th>
                <th style="text-align:center">Hasil</th>
                <th style="text-align:center">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php $no = 1; ?>
                <?php foreach ($hs as $h) : ?>
                  <td><?= $no; ?></td>
                  <td><?= $h["nim"]; ?></td>
                  <td><?= $h['nama']; ?></td>
                  <td><?= $h['total']; ?></td>
                  <td>
                    <a href="<?= base_url('hs/terimaCa/') . $h['kd_hs']; ?>" class="tombol-diterima btn btn-primary btn-xs"> <i class="fa fa-check"></i> Diterima</a>
                    <a href="<?= base_url('hs/tolakCa/') . $h['kd_hs']; ?>" class="tombol-ditolak btn btn-danger btn-xs"> <i class="fa fa-close"></i> Tidak</a>
                  </td>
              </tr>
              <?php $no++; ?>
            <?php endforeach ?>
            </tbody>
          </table>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.3.1.js' ?>"></script>