<?php
include './boxleft.php';
?>
<div class="content-wrapper">
    <div class="card">
        <div class="card-header border-0">
            <h3>Danh sách tin tức </h3>
            <div style="float: right;">
                <a href="index.php?act=add_news"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>ID News</th>
                        <th>Tiêu đề</th>
                        <th>Hình Ảnh</th>
                        <th>Ngày Đăng</th>
                        <th>Mô tả</th>
                        <th>Nội Dung</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listtintuc as $tintuc) {
                        extract($tintuc);
                        $suatintuc = "index.php?act=sua_tt&id=" . $id;
                        $xoatintuc = "index.php?act=xoa_tt&id=" . $id;
                        $anhtintuc = "../../upload/" .  $anh_tin_tuc;
                        if (is_file($anhtintuc)) {
                            $anhtt = "<img src='" . $anhtintuc . "' height='100px'>";
                        } else {
                            $anhtt = "no photo";
                        }
                        echo '<tr>
                                <td>' . $id . '</td>
                        <td style="width: 200px;height: auto;">' . $tieu_de . '</td>
                        <td>' . $anhtt . '</td>
                        <td>' . $ngay_dang . '</td>
                        <td style="width: 200px; height: auto;">' . $mo_ta . '</td>
                        <td style="width: 200px; height: auto;">' . $noi_dung . '</td>
                        <td>
                        <a href="' . $suatintuc . '" class="btn btn-primary" style="margin-right: 30px;">
                        <i class="bi bi-pencil-fill"></i>
                        Edit
                        </a>
                        <a href="' . $xoatintuc . '" class="btn btn-primary">
                        <i class="bi bi-trash3-fill"></i>
                         Xóa
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