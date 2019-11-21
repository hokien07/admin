<form role="form" method="post">
  <div class="card-body">
    <div class="form-group">
      <label for="name">Tên</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="">
    </div>
    <div class="form-group">
      <label for="description">Mô tả</label>
      <textarea class="form-control" rows="3" placeholder="" name="description"></textarea>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="publish" name="publish" value="1">
      <label class="form-check-label" for="publish">Hiển thị</label>
    </div>
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Lưu</button>
    <button type="Reset" class="btn btn-primary"><i class="fas fa-sync-alt"></i> Nhập lại</button>
    <a href="#" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Quay về</a>
  </div>
</form>
