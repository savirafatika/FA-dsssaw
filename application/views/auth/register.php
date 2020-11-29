<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $judul; ?></title>

  <!-- Bootstrap -->
  <link href="<?= base_url('assets'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url('assets'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url('assets'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="<?= base_url('assets'); ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= base_url('assets'); ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <table border="0.5">
      <tr>
        <td>
          <img style="width: 120px; height: 120px; padding-left: 23px; padding-top: 23px;" src="<?= base_url('assets/images/logofa.png'); ?>">
        </td>
        <td>
          <!--
            Two spaces - Type in &ensp;
            Four spaces - Type in &emsp;
            Tab - Type in &nbsp;&nbsp;&nbsp;&nbsp;
          -->
          <br>
          <h1><i class="fas fa-h1">&ensp; Forum Asisten </i></h1>
        </td>
      </tr>
    </table>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="<?= base_url('auth/register'); ?>" method="post">
            <h1>Daftar Akun</h1>
            <div>
              <small class="text-danger"><?= form_error('name'); ?></small>
              <input type="text" class="form-control" placeholder="Nama Lengkap" name="name" />
            </div>
            <div>
              <small class="text-danger"><?= form_error('email'); ?></small>
              <input type="text" class="form-control" placeholder="Email" name="email" />
            </div>
            <div>
              <small class="text-danger"><?= form_error('password1'); ?></small>
              <input type="password" class="form-control" placeholder="Password" name="password1" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password2" />
            </div>
            <div>
              <button type="submit" class="btn btn-default submit">Daftar</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Sudah jadi member ?
                <a href="<?= base_url('auth'); ?>" class="to_register"> Login disini </a>
              </p>

              <div class="clearfix"></div>
              <br />

            </div>
          </form>
        </section>
      </div>

    </div>
  </div>
</body>

</html>