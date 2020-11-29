<!-- Modal Edit Kriteria-->
<?php foreach ($kriteria as $d) : ?>
  <div class="modal fade" id="EditKriteriaModal<?= $d["kd_kriteria"]; ?>" tabindex=" -1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Edit Kriteria</h5>
        </div>
        <?= form_open_multipart('kriteria/editKriteria'); ?>
        <input type="hidden" name="kd_kriteria" value="<?= $d['kd_kriteria']; ?>">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="kt_kriteria" name="kt_kriteria" value="<?= $d['kt_kriteria']; ?>">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="bobot_pref" name="bobot_pref" value="<?= $d['bobot_pref']; ?>">
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