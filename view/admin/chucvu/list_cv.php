<?php
include './boxleft.php';
?>
<div class="content-wrapper">
    <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
        <div class="card-header border-0">
            <h3>Danh sách chức vụ </h3>
            <div style="float: right;">
                <a href="index.php?act=add_cv"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>ID chức vụ</th>
                        <th>tên chức vụ</th>
                        <th>Nội Dung</th>
                        <th>Trạng Thái</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listchucvu as $chucvu) {
                        extract($chucvu);
                        $suachucvu = "index.php?act=sua_cv&id=" . $id;
                        $xoachucvu = "index.php?act=xoa_cv&id=" . $id;
                        echo '<tr>
                                <td>' . $id . '</td>
                        <td>' . $ten_chucvu . '</td>
                        <td>' . $mo_ta . '</td>
                        <td>' . $trang_thai . '</td>
                        <td>
                            <a href="' . $suachucvu . '" class="btn btn-primary" style="margin-right: 30px;">
                                <i class="bi bi-pencil-fill"></i>
                                Edit
                            </a>
                            <a href="' . $xoachucvu . '" class="btn btn-primary">
                                <i class="bi bi-trash3-fill"></i>
                                Xóa
                            </a>
                        </td>     
                               </tr>  ';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->
</div>