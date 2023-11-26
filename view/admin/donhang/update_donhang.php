<?php
include 'boxleft.php';

?>
<div class="content-wrapper">


    <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
        <div class="card-header border-0">
            <h3>Danh sách đơn hàng </h3>
            <div style="float: right;">
                    <a href="index.php?act=add_donhang"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
                </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>Mã hóa đơn</th>
                        <th>Ngày lập hóa đơn</th>
                        <th>Tên khách hàng </th>
                        <th>Tên sản phẩm </th>
                        <th>tổng tiền</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>mhd01</td>
                        <td>21/10/2023</td>
                        <td>hà thế bảo</td>
                        <td>áo bò nam</td>
                        <td>$200</td>
                        <td>
                            <a href="index.php?act=chitiet_donhang" class="btn btn-primary" style="margin-right: 30px;">
                                <i class="bi bi-pencil-fill"></i>
                                Chi tiết
                            </a>
                            <a href="#" class="btn btn-primary">
                                <i class="bi bi-trash3-fill"></i>
                                xóa
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->


</div>