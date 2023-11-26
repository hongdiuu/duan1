<?php
include './boxleft.php';
?>
<div class="content-wrapper">
  <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
    <div class="card-header border-0">
      <h3>Danh sách bình luận </h3>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
          <tr>
            <th>id cmt</th>
            <th>Tên Khách Hàng</th>
            <th>Tên sản phẩm</th>
            <th>Nội dung</th>
            <th>Sao</th>
            <th>Ngày đánh giá</th>
            <th>Trạng thái</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($result as $value) {
            extract($value);
            $linkdelete = "index.php?act=xoa_cmt&idcmt=" . $id;
            echo '<tr>
              <td>' . $id . '</td>
              <td>' . $namekh . '</td>
              <td>' . $tensp . '</td>
              <td>' . $noi_dung . '</td>
              <td>' . $diem_sao . '</td>
              <td>' . $ngay_cmt . '</td>
              <td>' . $trang_thai . '</td>
              <td>
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