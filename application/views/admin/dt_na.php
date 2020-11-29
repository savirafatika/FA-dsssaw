<!-- page content -->
<div class="right_col" role="main">
  <div class="row top_tiles">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tabel Nilai Seleksi<small>Users</small></h2>
          <ul class="nav navbar-right panel_toolbox">
          </ul>
          <div class="clearfix"></div>
          <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="x_content">

          <div class="clearfix" style="padding-bottom: 10px;"></div>
          <!-- Menampilkan Tabel berdasarkan prodi dan matkul yang dipilih dengan kondisi nim mengambil dr calon asdos, dimana kd_matkul asdos harus sama dengan matkul yg dipilih untuk filtering tampil tabel-->
          <table id="datatable-responsive" class="asdos table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>NIM</th>
                <th>N.Presentasi</th>
                <th>N.Penguasaan Materi</th>
                <th>N.Tanya Jawab</th>
                <th>N.Penampilan</th>
                <th>N.Sikap</th>
                <th>N.Motivasi</th>
                <th>N.Tes Teori</th>
                <th>N.Tes Praktik</th>
                <th>N.Matkul</th>
                <th>IPK</th>
                <th>Rekomendasi</th>
                <th>TFT</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($nilai_seleksi as $n) : ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $n['nim']; ?></td>
                  <td><?= $n['n_pre']; ?></td>
                  <td><?= $n['p_mtr']; ?></td>
                  <td><?= $n['n_tj']; ?></td>
                  <td><?= $n['n_pn']; ?></td>
                  <td><?= $n['n_skp']; ?></td>
                  <td><?= $n['n_mt']; ?></td>
                  <td><?= $n['n_tt']; ?></td>
                  <td><?= $n['n_tp']; ?></td>
                  <td><?= $n['n_mk']; ?></td>
                  <td><?= $n['ipk']; ?></td>
                  <td><?= $n['rkmd']; ?></td>
                  <td><?= $n['tft']; ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->