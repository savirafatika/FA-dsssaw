<!-- Modal Tambah Kriteria-->
<div class="modal fade" id="ModalTambahDtKriteria" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="apasih">Tambah Detail Kriteria</h5>
      </div>
      <?= form_open_multipart('dt_kriteria/tambahDt_kriteria'); ?>
      <div class="modal-body">
        <div class="form-group">
          <select class="form-control" name="kd_kriteria">
            <option>Pilih Kriteria</option>
            <?php foreach ($kriteria as $d) : ?>
              <option value="<?= $d['kd_kriteria']; ?>"><?= $d["kt_kriteria"]; ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="kt" name="kt" placeholder="Ketentuan Kriteria">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="var" name="var" placeholder="Variabel">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="n" name="n" placeholder="Nilai" required="required" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-round btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>