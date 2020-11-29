  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>

      <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Data Calon Asisten</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <?= $this->session->flashdata('message'); ?>

              <div id="step-2">
                <h2 class="StepTitle">Pilih Matakuliah</h2>
                <form action="<?= base_url('berkas/simpanMatkul'); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">

                  <div class="form-group">
                    <div class="btn-group">
                      <select class="form-control" name="matkul">
                        <option>Matakuliah</option>
                        <?php foreach ($matkul as $m) : ?>
                          <option value="<?= $m['kd_mt']; ?>"><?= $m['matkul']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="btn-group">
                      <select class="form-control" name="nilai">
                        <option>Nilai</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                      </select>
                    </div>
                    <?php
                    $id = $valMatkul['id_ca'];
                    $this->db->from('ca_pilih');
                    $this->db->where('id_ca', $id);
                    $baris =  $this->db->count_all_results();
                    if ($baris >= 2) {
                      $tipe = 'button';
                      $id = 'btnsave';
                    } else {
                      $tipe = 'submit';
                      $id = 'save';
                    }
                    ?>
                    <div class="btn-group">
                      <button style="margin-bottom: 1px;" class="btn btn-dark form-control" type="<?= $tipe; ?>" id="<?= $id; ?>">Save</button>
                    </div>
                  </div>
                </form>
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Matakuliah</th>
                      <th>Nilai</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php $no = 1; ?>
                      <?php foreach ($cp as $n) : ?>
                        <td><?= $no; ?></td>
                        <td><?= $n["matkul"]; ?></td>
                        <td><?= $n['n_mk']; ?></td>
                        <td>
                          <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#EditBrModal<?= $n["kd_cap"]; ?>"> <i class="fa fa-pencil"></i> Edit</a>
                          <a href="<?= base_url('berkas/hapusBerkas/') . $n['kd_cap']; ?>" class="tombol-hapus btn btn-danger btn-xs"> <i class="fa fa-trash-o"></i> Delete</a>
                        </td>
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