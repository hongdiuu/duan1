<?php
include 'boxleft.php';
?>
<div class="content-wrapper">
    <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
        <div class="card-header border-0">
            <h3>Danh sách người dùng </h3>
            <div class="search">
                <form action="index.php?act=list_nd" method="post" style="display: flex;">
                    <input type="text" name="keyw" style="width: 150px; height: 30px;">
                    <input type="submit" name="ok" value="Tìm kiếm">
                </form>
                <div style="float: right;">
                    <a href="index.php?act=add_nd"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>ID user</th>
                        <th>User name</th>
                        <th>password</th>
                        <th>Họ và Tên</th>
                        <th>Ngày Sinh</th>
                        <th>Địa Chỉ</th>
                        <th>Email</th>
                        <th>SĐT</th>
                        <th>Chức Vụ</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list_nguoidung as $list) {
                        extract($list);
                        $linkupdate = "index.php?act=sua_tt_nd&idnd=" . $id;
                        $linkdelete = "index.php?act=xoa_tt_nd&idnd=" . $id;
                        echo ' <tr>
                        <td>' . $id . '</td>
                        <td>' . $user_name . '</td>
                        <td>' . $pass . '</td>
                        <td>' . $ho_ten . '</td>
                        <td>' . $ngay_sinh . '</td>
                        <td style="width: 100px; height: auto;">' . $dia_chi . ' </td>
                        <td>' . $email . '</td>
                        <td>' . $sdt . '</td>
                        <td>' . $ten_chucvu . '</td>
                        <td>
                            <a href="' . $linkupdate . '" class="btn btn-primary" style="margin-right: 30px;">
                                <i class="bi bi-pencil-fill"></i>
                                Edit
                            </a>
                            <a href="' . $linkdelete . '" class="btn btn-primary">
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