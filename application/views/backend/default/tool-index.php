<?php $this->load->view('backend/default/header'); ?>

<body class="hold-transition sidebar-mini layout-footer-fixed">
<!-- Site wrapper -->
<div class="wrapper">

    <?php $this->load->view('backend/default/nav'); ?>

    <?php $this->load->view('backend/default/sidebar'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

     <?php $this->load->view('backend/default/breadcrumb'); ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <?php if(isset($error)): ?>
            <div class="col-12">
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Thông báo!</h5>
                  <?php echo $error;  ?>
                </div>
            </div>
        <?php  endif; ?>
          <div class="col-6">
              <div class="card">


                <div class="card-body">
                    <?php if(isset($template)) $this->load->view($template); ?>
                </div>
              </div>
              <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php $this->load->view('backend/default/footer'); ?>
