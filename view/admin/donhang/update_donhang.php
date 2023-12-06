<?php
include './boxleft.php';
extract($result);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary" style="width: 70%; margin-left: 200px;">
            <div class="card-header">
                <h3 class="card-title">cập nhập trạng thái đơn hàng</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="index.php?act=update_ctdh" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label>Trạng thái đơn hàng</label>
                        <input type="text" name="trangthai" class="form-control" id="exampleInputPassword1" value="<?= $trang_thai ?>">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <input type="text" name="idhd" value="<?php if (isset($id) &&  $id > 0) echo $id ?>">
                    <input type="submit" name="capnhap_hd" class="btn btn-primary" value="Cập nhập">
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?act=list_don_hang"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->

</div>