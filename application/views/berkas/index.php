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
              <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="x_content">
              <div id="step-1">
                <form action="<?= base_url('berkas/editBerkas'); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                  <input type="hidden" name="kd_ca" value="<?= $c_a['kd_ca']; ?>">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Foto <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <img style="width: 150px; margin-bottom: 10px;" src="<?= base_url('assets/images/') . $c_a['foto']; ?>">
                      <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIM <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" name="nim" id="nim" value="<?= $c_a['nim']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Lengkap<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="nama" name="nama" value="<?= $c_a['nama']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <p>
                        L :
                        <input type="radio" class="flat" name="jk" id="genderM" value="L" <?php if ($c_a['jk'] == 'L') {
                                                                                            echo 'checked';
                                                                                          } ?> /> P :
                        <input type="radio" class="flat" name="jk" id="genderF" value="P" <?php if ($c_a['jk'] == 'P') {
                                                                                            echo 'checked';
                                                                                          } ?> />
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="alamat" name="alamat" class="form-control col-md-7 col-xs-12" type="textarea" value="<?= $c_a['alamat']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">No.HP <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="nohp" class="form-control col-md-7 col-xs-12" required="required" type="text" name="nohp" value="<?= $c_a['nohp']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="email" class="form-control col-md-7 col-xs-12" required="required" type="text" name="email" value="<?= $c_a['email']; ?>" readonly />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Prodi <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" name="prodi">
                        <?php foreach ($prodinya as $pd) : ?>
                          <option value="<?= $pd['id_prodi']; ?>">Pilih Prodi Sekarang = <?= $pd['prodi']; ?></option>
                        <?php endforeach; ?>
                        <?php foreach ($prodi as $p) : ?>
                          <option value="<?= $p['id_prodi']; ?>"><?= $p['prodi']; ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Organisasi <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" required="required" type="text" id="org" name="org" value="<?= $c_a['org']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">SKS <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" required="required" type="text" id="sks" name="sks" value="<?= $c_a['sks']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">IPK <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" required="required" type="text" id="ipk" name="ipk" value="<?= $c_a['ipk']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">TFT <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <p>
                        Pernah :
                        <input type="radio" class="flat" name="tft" id="tftY" value="Y" <?php if ($c_a['tft'] == 'Y') {
                                                                                          echo 'checked';
                                                                                        } ?> /> Belum Pernah :
                        <input type="radio" class="flat" name="tft" id="tftN" value="N" <?php if ($c_a['tft'] == 'N') {
                                                                                          echo 'checked';
                                                                                        } ?> />
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Rekomendasi <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <p>
                        Ya :
                        <input type="radio" class="flat" name="rkmd" id="rkmdY" value="Y" <?php if ($c_a['rkmd'] == 'Y') {
                                                                                            echo 'checked';
                                                                                          } ?> /> Tidak :
                        <input type="radio" class="flat" name="rkmd" id="rkmdN" value="N" <?php if ($c_a['rkmd'] == 'N') {
                                                                                            echo 'checked';
                                                                                          } ?> />
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Periode <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" name="periode">
                        <option value="<?= $c_a['periode']; ?>">Tahun Periode =
                          <?= $c_a['periode']; ?>
                        </option>
                        <option><?= date('Y'); ?></option>
                      </select>
                    </div>
                  </div>
                  <button style="margin-left: 175px; margin-top: 20px; margin-bottom: 100px;" type="submit" class="btn btn-dark">Save Change</button>

                </form>
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