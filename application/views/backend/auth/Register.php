<?php $this->load->view('backend/default/login-header'); ?>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">

      <p class="login-box-msg">Đăng ký thành viên</p>

        <?php
            if(isset($error)) { ?>
                <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-ban"></i> Thông báo!</h5>
                        <?php echo $error; ?>
                </div>
        <?php } ?>

        <form method="post">

            <div class="input-group mb-3">
              <input type="text" class="form-control"  name="user_name" placeholder="Tài khoản">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="mail" class="form-control" name="mail" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="re_password" placeholder="Nhập lại mật khẩu">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-12">
                 <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng ký</button>
                </div>
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- Hoặc -</p>
            <a href="#" class="btn btn-block btn-primary">
              <i class="fab fa-facebook mr-2"></i>
              Đăng ký bằng tài khoản facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus mr-2"></i>
             Đăng ký bằng tài khoản Google+
            </a>
        </div>

      <a href="admin" class="text-center">Đã có tài khoản</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?php $this->load->view('backend/default/login-footer'); ?>
