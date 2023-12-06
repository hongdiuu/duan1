<?php
include 'boxleft.php';
?>
<div class="content-wrapper">
  <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
    <div class="card-header border-0">
      <h3>Danh sách liên hệ </h3>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
          <tr>
            <th>ID</th>
            <th>Tên Khách hàng</th>
            <th>Nội Dung</th>
            <th>Trạng Thái </th>
            <th>More</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($list_lh as $value) {
            extract($value);
            $linkupdate = "index.php?act=sua_lh&idlh=" . $id;
            $linkdelete = "index.php?act=xoa_lh&idlh=" . $id;
            echo '<tr>
            <td>' . $id . '</td>
            <td>' . $ho_ten . '</td>
            <td>' . $noi_dung . '</td>
            <td>' . $trang_thai . '</td>
            <td>
              <a href="' .  $linkupdate . '" class="btn btn-primary" style="margin-right: 30px;">
                <i class="bi bi-pencil-fill"></i>
                Edit
              </a>
              <a href="' . $linkdelete . '" class="btn btn-primary">
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