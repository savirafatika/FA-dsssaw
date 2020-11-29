<!-- Modal Tambah Dosen-->
<div class="modal fade" id="ModalTambahDosen" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="apasih">Tambah Dosen</h5>
      </div>
      <?= form_open_multipart('dosen/tambahDosen'); ?>
      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required="required" />
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Dosen" required="required" />
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomer HP">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="required" />
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