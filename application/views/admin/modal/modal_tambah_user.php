<!-- Modal Tambah Pengguna-->
<div class="modal fade" id="ModalTambahUser" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="apasih">Tambah Pengguna</h5>
      </div>
      <?= form_open_multipart('pengguna/tambahUser'); ?>
      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" id="name" name="name" placeholder="Username" required="required" />
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="required" />
        </div>
        <div class="input-group">
          <input type="file" class="form-control" id="image" name="image">
          <span class="input-group-btn">
            <p class="btn btn-info">Foto Profil</p>
          </span>
        </div>
        <div class="form-group">
          <select class="form-control" name="role_id">
            <?php
            if ($m['role_id'] == 1) {
              $m['role_id'] = 'Admin';
            } else {
              $m['role_id'] = 'Calon Asdos';
            }
            ?>
            <option>Hak Akses</option>
            <option value="1">Admin</option>
            <option value="2">Calon Asdos</option>
          </select>
        </div>
        <div class="form-group">
          <select class="form-control" name="is_active">
            <?php
            if ($m['is_active'] == 1) {
              $m['is_active'] = 'Aktif';
            } else {
              $m['is_active'] = 'Tidak Aktif';
            }
            ?>
            <option>Status Pengguna</option>
            <option value="1">Aktif</option>
            <option value="0">Tidak Aktif</option>
          </select>
        </div>
        <div class="form-group">
          <input type="date" class="form-control" id="date_created" name="date_created">
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