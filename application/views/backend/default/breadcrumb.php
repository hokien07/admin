<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><?php echo isset($title) ? $title : "" ?></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <?php  if(isset($breadcrumb)) :
                $count = 0;
                $length = count($breadcrumb);
                foreach($breadcrumb as $key=>$br) :  ?>
                <li class="breadcrumb-item <?php if($count == $length -1 ) echo 'active';   ?>"><a href="<?php echo $br ?>"><?php echo $key  ?></a></li>
            <?php $count++; endforeach; endif; ?>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
