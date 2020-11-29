<!-- Modal Edit Dosen-->
<?php foreach ($dt_kriteria as $dt) : ?>
  <div class="modal fade" id="EditDtKriteriaModal<?= $dt["kd_dtkriteria"]; ?>" tabindex=" -1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Edit Detail Kriteria</h5>
        </div>
        <?= form_open_multipart('dt_kriteria/editDt_kriteria'); ?>
        <input type="hidden" name="kd_dtkriteria" value="<?= $dt['kd_dtkriteria']; ?>">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="kd_kriteria">
              <option>
                <?php
                  if ($dt['kd_kriteria'] == 1) {
                    $dt['kd_kriteria'] = "Tes Microteaching";
                  } elseif ($dt['kd_kriteria'] == 2) {
                    $dt['kd_kriteria'] = "Tes Wawancara";
                  } elseif ($dt['kd_kriteria'] == 3) {
                    $dt['kd_kriteria'] = "Tes Akademik";
                  } elseif ($dt['kd_kriteria'] == 4) {
                    $dt['kd_kriteria'] = "Nilai Matakuliah";
                  } elseif ($dt['kd_kriteria'] == 5) {
                    $dt['kd_kriteria'] = "IPK";
                  } elseif ($dt['kd_kriteria'] == 6) {
                    $dt['kd_kriteria'] = "Rekomendasi";
                  } else {
                    $dt['kd_kriteria'] = "TFT";
                  }
                  ?>
                Kriteria now = <?= $dt["kd_kriteria"]; ?>
              </option>
              <?php foreach ($kriteria as $d) : ?>
                <option value="<?= $d['kd_kriteria']; ?>"><?= $d["kt_kriteria"]; ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="kt" name="kt" value="<?= $dt['kt']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="var" name="var" value="<?= $dt['var']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="n" name="n" value="<?= $dt['n']; ?>">
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