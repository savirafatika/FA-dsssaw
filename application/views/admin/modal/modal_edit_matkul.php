<!-- Modal Edit Dosen-->
<?php foreach ($matkul as $d) : ?>
  <div class="modal fade" id="EditMatkulModal<?= $d["kd_mt"]; ?>" tabindex=" -1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Edit Matakuliah</h5>
        </div>
        <?= form_open_multipart('matkul/editMatkul'); ?>
        <input type="hidden" name="kd_mt" value="<?= $d['kd_mt']; ?>">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="matkul" name="matkul" value="<?= $d['matkul']; ?>">
          </div>
          <div class="form-group">
            <select class="form-control" name="prodi_id">
              <?php
                if ($d['prodi_id'] == 1) {
                  $d['prodi_id'] = "D3 - Manajemen Informatika";
                } elseif ($d['prodi_id'] == 2) {
                  $d['prodi_id'] = "D3 - Teknik Informatika";
                } elseif ($d['prodi_id'] == 3) {
                  $d['prodi_id'] = "S1 - Informatika";
                } elseif ($d['prodi_id'] == 4) {
                  $d['prodi_id'] = "	
                  S1 - Sistem Informasi";
                } elseif ($d['prodi_id'] == 5) {
                  $d['prodi_id'] = "S1 - Teknologi Informasi";
                } elseif ($d['prodi_id'] == 6) {
                  $d['prodi_id'] = "S1 - Teknik Komputer";
                } elseif ($d['prodi_id'] == 7) {
                  $d['prodi_id'] = "S1 - Arsitektur";
                } elseif ($d['prodi_id'] == 8) {
                  $d['prodi_id'] = "S1 - Perencanaan Wilayah dan Kota";
                } elseif ($d['prodi_id'] == 9) {
                  $d['prodi_id'] = "S1 - Geografi";
                } elseif ($d['prodi_id'] == 10) {
                  $d['prodi_id'] = "S1 - Kewirausahaan";
                } elseif ($d['prodi_id'] == 11) {
                  $d['prodi_id'] = "S1 - Ekonomi";
                } elseif ($d['prodi_id'] == 12) {
                  $d['prodi_id'] = "S1 - Akuntansi";
                } elseif ($d['prodi_id'] == 13) {
                  $d['prodi_id'] = "S1 - Ilmu Pemerintahan";
                } elseif ($d['prodi_id'] == 14) {
                  $d['prodi_id'] = "S1 - Ilmu Komunikasi";
                } elseif ($d['prodi_id'] == 15) {
                  $d['prodi_id'] = "S1 - Hubungan Internasional";
                } else {
                  $d['prodi_id'] = "Prodi Tidak Terdaftar";
                }
                ?>
              <option value="<?= $d['prodi_id']; ?>">Pilihan prodi = <?= $d["prodi_id"]; ?></option>
              <?php foreach ($prodi as $p) : ?>
                <option value="<?= $p['id_prodi']; ?>"><?= $p["prodi"]; ?></option>
              <?php endforeach ?>
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