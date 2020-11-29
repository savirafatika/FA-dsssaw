<!-- Modal Tambah Pengguna-->
<?php foreach ($tr as $m) : ?>
  <div class="modal fade" id="ModalTambahUser" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Detail Alternatif</h5>
        </div>
        <?= form_open_multipart('hs/lihatHasil'); ?>
        <?php foreach ($tr as $m) : ?>
          <?php
          $m["nim"];
          $jml1 = ($m['k1'] / intval($max['C1'])) * intval($b1['bobot_pref']);
          $jml2 = ($m['k2'] / intval($max2['C2'])) * intval($b2['bobot_pref']);
          $jml3 = ($m['k3'] / intval($max3['C3'])) * intval($b3['bobot_pref']);
          $jml4 = ($m['k4'] / intval($max4['C4'])) * intval($b4['bobot_pref']);
          $jml5 = ($m['k5'] / intval($max5['C5'])) * intval($b5['bobot_pref']);
          $jml6 = ($m['k6'] / intval($max6['C6'])) * intval($b6['bobot_pref']);
          $jml7 = ($m['k7'] / intval($max7['C7'])) * intval($b7['bobot_pref']);
          $data = [$jml1, $jml2, $jml3, $jml4, $jml5, $jml6, $jml7];
          $total = array_sum($data);
          ?>
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="nim" name="nim[]" value="<?= $m['nim']; ?>" required="required" readonly />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="nama" name="nama[]" value="<?= $m['nama']; ?>" required="required" readonly>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="total" name="total[]" value="<?= $total; ?>" required="required" readonly />
            </div>

          </div>
        <?php endforeach; ?>
        <div class="modal-footer">
          <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-round btn-primary">Rangking</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>