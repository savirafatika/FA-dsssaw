<!-- Modal Tambah Matakuliah-->
<?php foreach ($na as $s) : ?>
  <div class="modal fade" id="ViewDetailModal<?= $s['kd_seleksi']; ?>" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Detail Nilai Asdos</h5>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <?= form_open_multipart('na/editNa'); ?>
        <input type="hidden" name="kd_cap" value="<?= $s['kd_cap']; ?>">
        <input type="hidden" name="nim" value="<?= $s['nim']; ?>">
        <input type="hidden" name="kd_seleksi" value="<?= $s['kd_seleksi']; ?>">
        <input type="hidden" name="kd_matkul" value="<?= $s['kd_matkul']; ?>">
        <div class="modal-body">
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="N.Presentasi">N.Presentasi <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input style="margin-bottom: 10px;" type="text" class="form-control" id="n_pre" name="n_pre" value="<?= $s['n_pre']; ?>" required="required" />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="N.Penguasaan Materi">N.Penguasaan Materi <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input style="margin-bottom: 10px;" type="text" class="form-control" id="p_mtr" name="p_mtr" value="<?= $s['p_mtr']; ?>" required="required" />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="N.Tanya Jawab">N.Tanya Jawab <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input style="margin-bottom: 10px;" type="text" class="form-control" id="n_tj" name="n_tj" value="<?= $s['n_tj']; ?>" required="required" />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="N.Penampilan">N.Penampilan <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input style="margin-bottom: 10px;" type="text" class="form-control" id="n_pn" name="n_pn" value="<?= $s['n_pn']; ?>" required="required" />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="N.Sikap">N.Sikap <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input style="margin-bottom: 10px;" type="text" class="form-control" id="n_skp" name="n_skp" value="<?= $s['n_skp']; ?>" required="required" />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="N.Motivasi">N.Motivasi <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input style="margin-bottom: 10px;" type="text" class="form-control" id="n_mt" name="n_mt" value="<?= $s['n_mt']; ?>" required="required" />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="N.Tes Teori">N.Tes Teori <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input style="margin-bottom: 10px;" type="text" class="form-control" id="n_tt" name="n_tt" value="<?= $s['n_tt']; ?>" required="required" />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="N.Tes Praktik">N.Tes Praktik <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input style="margin-bottom: 10px;" type="text" class="form-control" id="n_tp" name="n_tp" value="<?= $s['n_tp']; ?>" required="required" />
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-round btn-primary">Save Change</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach ?>