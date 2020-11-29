  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>

      <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Hasil Seleksi</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <?= $this->session->flashdata('message'); ?>

              <div id="step-2">
                <form action="<?= base_url('berkas/pengumuman'); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">

                  <div class="form-group">
                  </div>
                </form>
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Matakuliah</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php $no = 1; ?>
                      <?php foreach ($hasil as $hs) : ?>
                        <td><?= $no; ?></td>
                        <td><?= $hs["matkul"]; ?></td>
                        <td>Anda <?= $hs['status']; ?></td>
                    </tr>
                    <?php $no++; ?>
                  <?php endforeach ?>
                  </tbody>
                </table>
              </div>

            </div>
            <!-- End SmartWizard Content -->
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- /page content -->