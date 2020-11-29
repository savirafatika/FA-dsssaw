<!-- page content -->
<div class="right_col" role="main">
  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_content">

          <form action="<?= base_url('user/edit'); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>

            <span class="section">Edit Profile</span>

            <div class="row">
              <?= $this->session->flashdata('message'); ?>
            </div>

            <div class="item form-group">
              <!-- Email -->
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="email" name="email" class="form-control col-md-7 col-xs-12" value="<?= $user['email']; ?>" readonly>
              </div>
            </div> <!-- /Email -->

            <div class="item form-group">
              <!-- Nama -->
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" type="text" value="<?= $user['name']; ?>">
                <?= form_error('name'); ?>
              </div>
            </div> <!-- /Nama -->

            <div class="item form-group">
              <!-- Foto -->
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"> Image <span class="required">*</span>
              </label>
              <div class="col-md-2 col-sm-4 col-xs-3">
                <img src="<?= base_url('/assets/images/') . $user['image']; ?>" class="img-thumbnail">
              </div>
              <div class="col-md-2 col-sm-4 col-xs-9">
                <input type="file" class="custom-file-input" name="image" id="image">
              </div>
            </div> <!-- /Foto -->
            =
            <div class="form-group">
              <div class="btn-group col-md-6 col-md-offset-3">
                <button id="send" type="submit" class="btn btn-primary">Edit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->