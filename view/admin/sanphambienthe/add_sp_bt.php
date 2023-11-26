<?php
include 'boxleft.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="card card-primary" style="width: 70%; margin-left: 200px;">
      <div class="card-header">
        <h3 class="card-title">Thêm biến thể sản phẩm </h3>
        
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form id="quickForm" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>Tên sản Phẩm</label>
            <select class="form-control" name="id_sp">
              <?php
              foreach ($listsp as $value) {
                extract($value);
                echo '<option value="' . $id . '">' . $ten_sp . '</option>';
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label>Size sản phẩm</label>
            <select class="form-control" name="size">
              <option>Chọn Size</option>
              <option>S</option>
              <option>M</option>
              <option>L</option>
              <option>XL</option>
              <option>XXL</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Màu sắc sản phẩm</label>
            <input type="text" name="mau" class="form-control" id="exampleInputPassword1" placeholder="màu sắc sản phẩm">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Số lượng sản phẩm</label>
            <input type="number" name="soluong" class="form-control" id="exampleInputPassword1" placeholder="Số lượng sản phẩm">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Giá Sản Phẩm</label>
            <input type="text" name="giasp" class="form-control" id="exampleInputPassword1" placeholder="Giá sản phẩm ">
          </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm Mới">
          <button type="reset" class="btn btn-primary">Nhập lại</button>
          <a href="index.php?act=list_sp_bt"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->

</div>