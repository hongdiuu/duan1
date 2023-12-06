<?php
include 'boxleft.php';
if (is_array($onespbt)) {
    extract($onespbt);
}


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary" style="width: 70%; margin-left: 200px;">
            <div class="card-header">
                <h3 class="card-title">Cập nhật biến thể sản phẩm </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="index.php?act=update_spbt" method="POST">
                <div class="card-body">
                <div class="form-group">
                        <label for="exampleInputPassword1">Tên sản phẩm </label>
                        <input type="text" name="tensp" class="form-control" id="exampleInputPassword1" value="<?= $ten_sp ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Size sản phẩm </label>
                        <input type="text" name="size" class="form-control" id="exampleInputPassword1" value="<?= $size ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Màu sắc sản phẩm</label>
                        <input type="text" name="mau" class="form-control" id="exampleInputPassword1" value="<?= $mau_sac ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Số lượng sản phẩm</label>
                        <input type="number" name="soluong" class="form-control" id="exampleInputPassword1" value="<?= $so_luong ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Giá Sản Phẩm</label>
                        <input type="text" name="giasp" class="form-control" id="exampleInputPassword1" value="<?= $gia ?>">
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <input type="hidden" name="id_bt" value="<?php if (isset($id) &&  $id > 0) echo $id ?>">
                    <input type="submit" name="capnhat" class="btn btn-primary" value="Cập Nhập">
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?act=list_sp_bt"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->

</div>