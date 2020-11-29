<!-- Modal Edit Dosen-->
<?php foreach ($dosen as $d) : ?>
  <div class="modal fade" id="EditDosenModal<?= $d["nik"]; ?>" tabindex=" -1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Edit Dosen</h5>
        </div>
        <?= form_open_multipart('dosen/editDosen'); ?>
        <input type="hidden" name="nik" value="<?= $d['nik']; ?>">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $d['nama']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $d['nohp']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" value="<?= $d['email']; ?>">
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