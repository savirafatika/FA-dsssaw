<!-- page content -->
<div class="right_col" role="main">
  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_content">

          <span class="section">Edit Profile</span>

          <div class="row">
            <?= $this->session->flashdata('message'); ?>
          </div>

          <form action="<?= base_url('user/ubahpass'); ?>" method="POST" class="form-horizontal form-label-left">

            <div class="item form-group">
              <!-- Password Lama -->
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="current_password">Password Lama<i class="fas fa-lambda"></i> <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="password" id="current_password" name="current_password" class="form-control col-md-7 col-xs-12">
              </div>
              <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div> <!-- /Password Lama -->

            <div class="item form-group">
              <!-- Password Baru -->
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="new_password1">Password Baru<i class="fas fa-lambda"></i> <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="password" id="new_password1" name="new_password1" class="form-control col-md-7 col-xs-12">
              </div>
              <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div> <!-- /Password Baru -->

            <div class="item form-group">
              <!-- Password Konfirmasi -->
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="new_password2">Ulangi Password Baru<i class="fas fa-lambda"></i> <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="password" id="new_password2" name="new_password2" class="form-control col-md-7 col-xs-12">
              </div>
              <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div> <!-- /Password Konfirmasi -->

            <div class="form-group">
              <div class="btn-group col-md-6 col-md-offset-3">
                <button id="send" type="submit" class="btn btn-primary">Kirim</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->