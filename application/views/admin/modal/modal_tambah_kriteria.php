<!-- Modal Tambah Kriteria-->
<div class="modal fade" id="ModalTambahKriteria" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="apasih">Tambah Kriteria</h5>
      </div>
      <?= form_open_multipart('kriteria/tambahKriteria'); ?>
      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" id="kt_kriteria" name="kt_kriteria" placeholder="Kriteria" required="required" />
        </div>
        <div class="form-group">
          <input type="number" class="form-control" id="bobot_pref" name="bobot_pref" placeholder="Bobot Preferensi">
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