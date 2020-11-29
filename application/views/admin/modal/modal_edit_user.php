<!-- Modal Edit Pengguna-->
<?php foreach ($pengguna as $d) : ?>
  <div class="modal fade" id="EditPenggunaModal<?= $d["id"]; ?>" tabindex=" -1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Edit Pengguna</h5>
        </div>
        <?= form_open_multipart('pengguna/editUser'); ?>
        <input type="hidden" name="id" value="<?= $d['id']; ?>">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" value="<?= $d['name']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" value="<?= $d['email']; ?>">
          </div>
          <div class="input-group">
            <img style="width: 100px; margin-bottom: 10px;" src="<?= base_url('assets/images/') . $d['image']; ?>">
            <input type="file" class="form-control" id="image" name="image">
          </div>
          <div class="form-group">
            <select class="form-control" name="role_id">
              <option value="<?= $d['role_id']; ?>">Hak Aksesnya =
                <?php
                  if ($d['role_id'] == 1) {
                    $d['role_id'] = 'Admin';
                  } else {
                    $d['role_id'] = 'Calon Asdos';
                  }
                  ?>
                <?= $d['role_id']; ?>
              </option>
              <option value="1">Admin</option>
              <option value="2">Calon Asdos</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="is_active">
              <option value="<?= $d['is_active']; ?>">Status Penggunanya =
                <?php
                  if ($d['is_active'] == 1) {
                    $d['is_active'] = 'Aktif';
                  } else {
                    $d['is_active'] = 'Tidak Aktif';
                  }
                  ?>
                <?= $d['is_active']; ?>
              </option>
              <option value="1">Aktif</option>
              <option value="0">Tidak Aktif</option>
            </select>
          </div>
          <div class="form-group">
            <input type="date" class="form-control" id="date_created" name="date_created" value="<?= (new DateTime($d['date_created']))->format('Y-m-d'); ?>">
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