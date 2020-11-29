<!-- Modal Tambah Matakuliah-->
<?php foreach ($ma as $m) : ?>
  <div class="modal fade" id="ModalTambahMatkul" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Yang Akan di Ranking</h5>
        </div>
        <?= form_open_multipart('hs/lihat_hasil'); ?>
        <div class="modal-body">
          <P><?= $m['nim']; ?></P>
          <div class="form-group">
            <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" required="required" />
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
<?php endforeach; ?>