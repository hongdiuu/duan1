<?php
include 'boxleft.php';
?>
<div class="content-wrapper">
    <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
        <div class="card-header border-0">
            <h3>Danh sách sản phẩm biến thể </h3>
            <div class="search">
                <form action="index.php?act=list_sp_bt" method="post" style="display: flex;">
                    <input type="text" name="keyw" style="width: 150px; height: 30px;">
                    <input type="submit" name="ok" value="Tìm kiếm">
                </form>
                <div style="float: right;">
                    <a href="index.php?act=add_spbt"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>Mã biến thể</th>
                        <th>Tên sản phẩm </th>
                        <th>Kích thước</th>
                        <th>Màu sắc </th>
                        <th>Số Lượng </th>
                        <th>Giá</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list_spbt as $list) {
                        extract($list);
                            
                        $linkupdate = "index.php?act=sua_spbt&idspbt=" . $id;
                        $linkdelete = "index.php?act=xoa_spbt&idspbt=" . $id;
                        echo ' <tr>
                        <td>' . $id. '</td>
                        <td>' . $ten_sp . '</td>
                        <td>' . $size . '</td>
                        <td>' . $mau_sac . '</td>
                        <td>' . $so_luong . '</td>
                        <td>' . $gia . '</td>
                        <td>
                            <a href="'. $linkupdate.'" class="btn btn-primary" style="margin-right: 30px;">
                                <i class="bi bi-pencil-fill"></i>
                                Edit
                            </a>
                            <a href="'. $linkdelete .'" class="btn btn-primary">
                                <i class="bi bi-trash3-fill"></i>
                                xóa
                            </a>
                        </td>
                    </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->


</div>