<?php
include 'boxleft.php';
?>
<div class="content-wrapper">


    <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
        <div class="card-header border-0">
            <h3>Danh sách đơn hàng </h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mã hóa đơn</th>
                        <th>Ngày lập hóa đơn</th>
                        <th>Tên khách hàng </th>
                        <th>Tổng hóa đơn</th>
                        <th>tổng tiền</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ( $ist_dh as $value) {
                        extract($value);
                        $link_cthd = "index.php?act=chitiet_donhang&idhd=" . $id;
                        $linkdelete = "index.php?act=xoa_sp&idhd=" . $id;
                        echo' <tr>
                        <td>'.$id.'</td>
                            <td>'.$ma_hd.'</td>
                            <td>'.$ngay_dat.'</td>
                            <td>'.$name.'</td>
                            <td>'.$soluong_hd.'</td>
                            <td>'.$tongtien.'</td>
                            <td>
                                <a href="'. $link_cthd.'" class="btn btn-primary" style="margin-right: 30px;">
                                    <i class="bi bi-pencil-fill"></i>
                                    Chi tiết
                                </a>
                                <a href="'.  $linkdelete .'" class="btn btn-primary">
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