<!-- Modal Edit Dosen-->
<?php foreach ($cap as $d) : ?>
  <div class="modal fade" id="EditBrModal<?= $d["kd_cap"]; ?>" tabindex=" -1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Edit Pilihan Matakuliah</h5>
        </div>
        <?= form_open_multipart('berkas/editBrMatkul'); ?>
        <input type="hidden" name="kd_cap" value="<?= $d['kd_cap']; ?>">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="kd_matkul">
              <option value="<?= $d['kd_matkul']; ?>">Matakuliah</option>
              <?php foreach ($matkul as $m) : ?>
                <option value="<?= $m['kd_mt']; ?>"><?= $m['matkul']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="n_mk" name="n_mk" value="<?= $d['n_mk']; ?>">
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