<!-- Modal Edit Dosen-->
<?php foreach ($ca as $c) : ?>
  <div class="modal fade" id="EditCaModal<?= $c["kd_ca"]; ?>" tabindex=" -1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Edit Calon Asdos</h5>
        </div>
        <?= form_open_multipart('ca/editCa'); ?>
        <input type="hidden" name="kd_ca" value="<?= $c['kd_ca']; ?>">
        <div class="modal-body">
          <div class="input-group">
            <img style="width: 100px; margin-bottom: 10px;" src="<?= base_url('assets/images/') . $c['foto']; ?>">
            <input type="file" class="form-control" id="foto" name="foto">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="nim" name="nim" value="<?= $c['nim']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $c['nama']; ?>">
          </div>
          <div class="form-group">
            <input type="textarea" class="form-control" id="alamat" name="alamat" value="<?= $c['alamat']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $c['nohp']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" value="<?= $c['email']; ?>">
          </div>
          <div class="form-group">
            <select class="form-control" name="prodi">
              <?php
              if ($m['prodi'] == 1) {
                $m['prodi'] = 'D3 - Manajemen Informatika';
              } else if ($m['prodi'] == 2) {
                $m['prodi'] = 'D3 - Teknik Informatika';
              } else if ($m['prodi'] == 3) {
                $m['prodi'] = 'S1 - Informatika';
              } else if ($m['prodi'] == 4) {
                $m['prodi'] = 'S1 - Sistem Informasi';
              } else if ($m['prodi'] == 5) {
                $m['prodi'] = 'S1 - Teknologi Informasi';
              } else if ($m['prodi'] == 6) {
                $m['prodi'] = 'S1 - Teknik Komputer';
              } else if ($m['prodi'] == 7) {
                $m['prodi'] = 'S1 - Arsitektur';
              } else if ($m['prodi'] == 8) {
                $m['prodi'] = 'S1 - Perencanaan Wilayah dan Kota';
              } else if ($m['prodi'] == 9) {
                $m['prodi'] = 'S1 - Geografi';
              } else if ($m['prodi'] == 10) {
                $m['prodi'] = 'S1 - Kewirausahaan';
              } else if ($m['prodi'] == 11) {
                $m['prodi'] = 'S1 - Ekonomi';
              } else if ($m['prodi'] == 12) {
                $m['prodi'] = 'S1 - Akuntansi';
              } else if ($m['prodi'] == 13) {
                $m['prodi'] = 'S1 - Ilmu Pemerintahan';
              } else if ($m['prodi'] == 14) {
                $m['prodi'] = 'S1 - Ilmu Komunikasi';
              } else {
                $m['prodi'] = 'S1 - Hubungan Internasional';
              }
              ?>
              <option value="<?= $c['prodi']; ?>">Pilihan = <?= $c['prodi']; ?></option>
              <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
              <option value="D3 - Teknik Informatika">D3 - Teknik Informatika</option>
              <option value="S1 - Informatika">S1 - Informatika</option>
              <option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
              <option value="S1 - Teknologi Informasi">S1 - Teknologi Informasi</option>
              <option value="S1 - Teknik Komputer">S1 - Teknik Komputer</option>
              <option value="S1 - Arsitektur">S1 - Arsitektur</option>
              <option value="S1 - Perencanaan Wilayah dan Kota">S1 - Perencanaan Wilayah dan Kota</option>
              <option value="S1 - Geografi">S1 - Geografi</option>
              <option value="S1 - Kewirausahaan">S1 - Kewirausahaan</option>
              <option value="S1 - Ekonomi">S1 - Ekonomi</option>
              <option value="S1 - Akuntansi">S1 - Akuntansi</option>
              <option value="S1 - Ilmu Pemerintahan">S1 - Ilmu Pemerintahan</option>
              <option value="S1 - Ilmu Komunikasi">S1 - Ilmu Komunikasi</option>
              <option value="S1 - Hubungan Internasional">S1 - Hubungan Internasional</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="org" name="org" value="<?= $c['org']; ?>">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin :</label>
            <p>
              L :
              <input type="radio" class="flat" name="jk" id="genderM" value="L" <?php if ($c['jk'] == 'L') {
                                                                                  echo 'checked';
                                                                                } ?> /> P :
              <input type="radio" class="flat" name="jk" id="genderF" value="P" <?php if ($c['jk'] == 'P') {
                                                                                  echo 'checked';
                                                                                } ?> />
            </p>
          </div>
          <div class="form-group">
            <label>Sudah Ikut TFT?</label>
            <p>
              Ya :
              <input type="radio" class="flat" name="tft" id="tftY" value="Y" <?php if ($c['tft'] == 'Y') {
                                                                                echo 'checked';
                                                                              } ?> /> Tidak :
              <input type="radio" class="flat" name="tft" id="tftN" value="N" <?php if ($c['tft'] == 'N') {
                                                                                echo 'checked';
                                                                              } ?> />
            </p>
          </div>
          <div class="form-group">
            <label>Direkomendasikan?</label>
            <p>
              Ya :
              <input type="radio" class="flat" name="rkmd" id="rkmdY" value="Y" <?php if ($c['rkmd'] == 'Y') {
                                                                                  echo 'checked';
                                                                                } ?> /> Tidak :
              <input type="radio" class="flat" name="rkmd" id="rkmdN" value="N" <?php if ($c['rkmd'] == 'N') {
                                                                                  echo 'checked';
                                                                                } ?> />
            </p>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="sks" name="sks" value="<?= $c['sks']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="ipk" name="ipk" value="<?= $c['ipk']; ?>">
          </div>
          <div class="form-group">
            <select class="form-control" name="periode">
              <option value="<?= $c['periode']; ?>">Tahun Periode =
                <?= $c['periode']; ?>
              </option>
              <option><?= date('Y'); ?></option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-round btn-primary">Edit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach ?>