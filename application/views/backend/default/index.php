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
          <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary"><i class="far fa-check-square"></i>  Chọn tất cả</button>
                    <button type="button" class="btn btn-warning"><i class="fas fa-trash-alt"></i> Xóa tất cả</button>
                    <button type="refresh" class="btn btn-success"><i class="fas fa-sync-alt"></i> Tải lại</button>
                  <!--    <h3 class="card-title">DataTable with minimal features & hover style</h3> -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if(isset($template)) $this->load->view($template); ?>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" class="btn btn-primary"><i class="far fa-check-square"></i>  Chọn tất cả</button>
                    <button type="button" class="btn btn-warning"><i class="fas fa-trash-alt"></i> Xóa tất cả</button>
                    <button type="refresh" class="btn btn-success"><i class="fas fa-sync-alt"></i> Tải lại</button>
                </div>
                <!-- /.card-footer -->
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
