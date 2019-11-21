
    <table id="example2" class="table table-bordered table-hover">
          <thead>
              <tr>
                <th class='text-center'>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="customCheckbox">
                      <label for="customCheckbox" class="custom-control-label"></label>
                    </div>
                </th>
                <th class='text-center'>Tên</th>
                <th class='text-center'>Mô tả</th>
                <th class='text-center'>Hiển thị</th>
                <th class='text-center'>Ngày tạo</th>
                <th class='text-center'>Cài đặt</th>
              </tr>
          </thead>
      <tbody>

          <?php if(isset($roles) ) : ?>
              <?php if(count($roles) <= 0) : ?>
                  <tr >
                    <td colspan="6" class='text-center'>Không có dữ liệu hiển thị</td>
                  </tr>
            <?php else: foreach($roles as  $key => $role) : ?>

                <tr>
                    <td class="text-center">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox<?php echo $role['id'] ?>" value="option1">
                            <label for="customCheckbox1" class="custom-control-label"></label>
                        </div>
                    </td>
                  <td><a href="role/edit/<?php echo $role['id'] ?>"><?php echo $role['name'] ?></a></td>
                  <td><?php echo $role['description'] ?></td>
                  <td class="text-center">
                      <div class="form-group">
                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                          <input type="checkbox" class="custom-control-input" id="customSwitch<?php echo $role['id'] ?>">
                          <label class="custom-control-label" for="customSwitch3"></label>
                        </div>
                      </div>

                  </td>
                  <td><?php echo date('d/m/Y', $role['created_at'])  ?></td>
                  <td>
                        <button class="btn btn-primary"></button>
                  </td>
                </tr>
          <?php endforeach; endif; else: ?>
              <tr>
                <td colspan="6" class='text-center'>Không có dữ liệu hiển thị</td>
              </tr>
          <?php endif; ?>


      </tbody>
      <tfoot>
          <tr>
            <th class='text-center'>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="customCheckbox" value="option">
                  <label for="customCheckbox" class="custom-control-label"></label>
                </div>
            </th>
            <th class='text-center'>Tên</th>
            <th class='text-center'>Mô tả</th>
            <th class='text-center'>Hiển thị</th>
            <th class='text-center'>Ngày tạo</th>
            <th class='text-center'>Cài đặt</th>
          </tr>
      </tfoot>
    </table>
