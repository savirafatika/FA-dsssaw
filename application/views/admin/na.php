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
          <div class="btn-group">
            <select class="form-control" name="prodi" id="prodi">
              <option>Pilih Prodi</option>
              <?php foreach ($prodi as $row) : ?>
                <option value="<?= $row['id_prodi']; ?>"><?= $row['prodi']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="btn-group">
            <select class="form-control" id="kd_matkul" name="kd_matkul">
              <option value="">Pilih Matakuliah</option>
            </select>
          </div>

          <div class="clearfix" style="padding-bottom: 10px;"></div>
          <!-- Menampilkan Tabel berdasarkan prodi dan matkul yang dipilih dengan kondisi nim mengambil dr calon asdos, dimana kd_matkul asdos harus sama dengan matkul yg dipilih untuk filtering tampil tabel-->
          <table id="datatable-responsive" class="asdos table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Matkul</th>
                <th>N.Matkul</th>
                <th>IPK</th>
                <th>Rekomendasi</th>
                <th>TFT</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($na as $n) : ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $n['nim']; ?></td>
                  <td><?= $n['matkul']; ?></td>
                  <td><?= $n['n_mk']; ?></td>
                  <td><?= $n['ipk']; ?></td>
                  <td><?= $n['rkmd']; ?></td>
                  <td><?= $n['tft']; ?></td>
                  <td>
                    <a href="" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#ViewDetailModal<?= $n["kd_seleksi"]; ?>"> <i class="fa fa-folder"></i> View Detail</a>
                  </td>
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

<!-- Select option -->
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.js"></script>

<script type="text/javascript">
  $(document).ready(function() {

    $('#prodi').change(function() {
      var id = $(this).val();
      $.ajax({
        url: "<?php echo site_url('na/get_matkul'); ?>",
        method: "POST",
        data: {
          id: id
        },
        async: true,
        dataType: 'json',
        success: function(data) {

          var html = '';
          var i;
          for (i = 0; i < data.length; i++) {
            html += '<option value=' + data[i].kd_mt + '>' + data[i].matkul + '</option>';
          }
          $('#kd_matkul').html(html);

        }
      });
      return false;
    });

  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#kd_matkul').change(function() {
      asdos();
    });
  });

  function asdos() {
    var kd_matkul = $('#kd_matkul').val();
    $.ajax({
      url: "<?= base_url('na/load_asdos'); ?>",
      data: "kd_matkul=" + kd_matkul,
      success: function(data) {
        $('.asdos tbody').html(data);
      }
    });
  }
</script>