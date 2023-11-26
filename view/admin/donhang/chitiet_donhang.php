<?php
include './boxleft.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="invoice p-3 mb-3" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">

    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h4>
          <i class="fas fa-globe"></i> AdminLTE, Inc.
        </h4>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>admin</strong><br>
          Hà Nội Việt Nam<br>
          Phone: 0336274225<br>
          Email: baotheha@gmail.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong> <?= $load_ctdh[0]['ho_ten'] ?></strong><br>
          <strong>Address:</strong> <?= $load_ctdh[0]['dia_chi'] ?><br>
          <strong>Phone: </strong> <?= $load_ctdh[0]['sdt'] ?><br>
          <strong>Email: </strong> <?= $load_ctdh[0]['email'] ?><br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Mã Khuyến Mại:# <?= $load_ctdh[0]['ma_km'] ?></b><br>
        <b>Mã HD:</b> <?= $load_ctdh[0]['ma_hd'] ?><br>
        <b>Ngày mua:</b> <?= $load_ctdh[0]['ngay_dat'] ?><br><br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Id hdct</th>
              <th>Tên SP</th>
              <th>Màu Sắc</th>
              <th>Size</th>
              <th>Số lượng</th>
              <th>Đơn giá</th>
              <th>Thành tiền</th>
              <th>Trạng thái</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $tong_tien=0;
            $tien_km=0;
            foreach ($load_ctdh as $value) {
              extract($value);
              echo '<tr>
                        <td>' . $id_cthd . '</td>
                        <td>' . $ten_sp . '</td>
                        <td>' . $mau_sac . '</td>
                        <td>' . $size . '</td>
                        <td>' . $so_luong . '</td>
                        <td>' . $gia . '</td>
                        <td>' . $thanh_tien . '</td>
                        <td>' . $trangthai_donhang . '</td>
                      </tr>
                     ';
              $tong_tien+=$thanh_tien;
              $tien_km=$tong_tien*$phan_tram/100;
            }
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Payment Methods:</p>
        <img src="../../thu_vien/dist/img/credit/visa.png" alt="Visa">
        <img src="../../thu_vien/dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="../../thu_vien/dist/img/credit/american-express.png" alt="American Express">
        <img src="../../thu_vien/dist/img/credit/paypal2.png" alt="Paypal">
      </div>
      <!-- /.col -->
      <div class="col-6">
        <p class="lead"> <?= $load_ctdh[0]['ngay_dat'] ?><br></p>
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Tổng Tiền:</th>
              <td><?=$tong_tien?></td>
            </tr>
            <tr>
              <th>Khuyến mãi( <?= $load_ctdh[0]['phan_tram'] ?>%):</th>
              <td><?=$tien_km?></td>
            </tr>
            <tr>
              <th>Số Tiền Phải Trả:</th>
              <td><?= $tong_tien - $tien_km?></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">

      <div class="col-12">
        <a href="index.php?act=list_don_hang"> <button type="submit" class="btn btn-success float-right">Danh Sách
          </button></a>

        <button type="submit" class="btn btn-primary float-right" style="margin-right: 5px;">
          Sửa Thông Tin
        </button>
      </div>
    </div>
  </div>
</div>