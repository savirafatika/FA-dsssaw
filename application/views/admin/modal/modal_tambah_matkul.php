<!-- Modal Tambah Matakuliah-->
<div class="modal fade" id="ModalTambahMatkul" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="apasih">Tambah Matakuliah</h5>
      </div>
      <?= form_open_multipart('matkul/tambahMatkul'); ?>
      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" id="matkul" name="matkul" placeholder="Matakuliah" required="required" />
        </div>
        <div class="form-group">
          <select class="form-control" name="prodi_id">
            <option>Pilih Prodi</option>
            <?php foreach ($prodi as $p) : ?>
              <option value="<?= $p['id_prodi']; ?>"><?= $p["prodi"]; ?></option>
            <?php endforeach ?>
          </select>
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