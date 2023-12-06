<?php
include "header.php";

?>
<div class="content-wrapper">


    <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
        <div class="card-header border-0">
            <h3>Lịch sử đơn hàng</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>ID</th>

                        <th>Ngày lập hóa đơn</th>
                        <th>Tên khách hàng </th>
                        <th>Tổng hóa đơn</th>
                        <th>tổng tiền</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list as $row) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["ngay_lap_hd"] . "</td>";
                        echo "<td>" . $row["ten_kh"] . "</td>";
                        echo "<td>" . $row["tong_hd"] . "</td>";
                        echo "<td>" . $row["trang_thai"] . "</td>";
                        echo "<td>" . $row["tong_tien"] . "</td>";
                        echo "<td><a href='chi_tiet_don_hang.php?id=" . $row["id"] . "'>Chi tiết</a></td>";
                        echo "</tr>";
                    }

                    if ($result->num_rows == 0) {
                        echo "<tr><td colspan='7'>Không có đơn hàng nào.</td></tr>";
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->


</div>
<?php
include 'footer.php';

?>