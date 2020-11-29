<!-- page content -->
<div class="right_col" role="main">
  <div class="row top_tiles">
    <div class="row">
      <div class="col-lg-6">
        <?= $this->session->flashdata('message'); ?>
      </div>
    </div>
    <div class="col-lg-5 col-md-12 col-xs-12">
      <div class="x_panel">
        <div class="x_content">

          <div class="card mb-5" style="height: 70px;">
            <div class="row no-gutters">
              <div class="col-lg-4">
                <img src="<?= base_url('/assets/images/') . $user['image']; ?>" class="card-img" style="width: 100px; height: 100px;">
              </div>
              <div class="col-lg-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $user['name']; ?></h5>
                  <p class="card-text"><?= $user['email']; ?></p>
                  <p class="card-text"><small class="text-muted">User since : <?= (new DateTime($user['date_created']))->format('d F Y'); ?></small></p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->