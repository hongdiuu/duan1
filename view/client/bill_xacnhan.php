  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <ul>
                          <li><a href="index.html">Trang chủ</a></li>
                          <li>Kiểm tra đơn hàng</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->

  <!--Checkout page section-->
  <div class="Checkout_section mt-60">
    <?php
    if (isset($list_hdct) and is_array($list_hdct)) {
        extract($list_hdct);
    }
    
    ?>

      <div style=" border: 1px solid gray; width: 800px;height: auto;margin-left: 400px;">
          <h3 style="text-align: center;background-color: #71ebda; padding: 20px 20px;">Cám ơn quý khách đã đặt hàng</h3>
          <div>
              <div style="padding: 10px 30px;">
                  <ul>
                        <div style="float: right;">
                        <li></i> Mã hóa đơn : <b>MHD-0<?php if (isset($list_hdct['id']) && ($list_hdct['id'] != "")) echo $list_hdct['id']; ?></b></li>
                        <li></i> ID km: <b> <?php if (isset($list_hdct['id_km']) && ($list_hdct['id_km'] != "")) echo $list_hdct['id_km']; ?></b></li>
                        <li></i> Ngày đặt: <b> <?php if (isset($list_hdct['ngay_dat']) && ($list_hdct['ngay_dat'] != "")) echo $list_hdct['ngay_dat']; ?></b></li>    
                        </div>
                      
                      <li></i> Tên khách hàng : <b> <?php if (isset($list_hdct['ten_kh']) && ($list_hdct['ten_kh'] != "")) echo $list_hdct['ten_kh']; ?></b></li>
                      <li> Address :<b> <?php if (isset($list_hdct['dia_chi']) && ($list_hdct['dia_chi'] != "")) echo $list_hdct['dia_chi']; ?></b></li>
                      <li><i class="fa fa-envelope-o"></i>Email: <b> <?php if (isset($list_hdct['email']) && ($list_hdct['email'] != "")) echo $list_hdct['email']; ?></b></li>
                      <li><i class="fa fa-phone"></i>Số điẹn thoại:<b> <?php if (isset($list_hdct['sdt']) && ($list_hdct['sdt'] != "")) echo $list_hdct['sdt']; ?></b> </li>
                  </ul>
              </div>
              <div style="text-align: center;">
                  <div class="order_table table-responsive">
                      <table>
                          <thead>
                              <tr>
                                  <th>Sản phẩm</th>
                                  <th>Thành tiền</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                    $tongtien = 0;
                                    $thanhtien = 0;
                                    foreach ($list_cthd as  $card) {
                                        $tensp = $card['ten_sp'];
                                        $soluong = $card['so_luong'];
                                        $giasp = $card['don_gia'];
                                        $thanhtien = $card['thanh_tien'];
                                        $tongtien = $card['tong_hd'];
                                ?>
                                      <tr>
                                          <td> <?= $tensp ?><strong> × <?= $soluong ?></strong></td>
                                          <td><?= number_format($thanhtien) ?></td>
                                      </tr>
                              <?php
                                    }
                                
                                ?>
                          </tbody>
                          <tfoot>
                              <tr>
                                  <th>Tổng tiền</th>
                                  <td><?= number_format($tongtien) ?></td>
                              </tr>

                              <?php
                                if (isset($_SESSION['khuyenmai']['phan_tram']) and $_SESSION['khuyenmai']['phan_tram'] != "") {
                                ?>
                                  <tr>
                                      <input type="hidden" name="idkm" value="<?= $_SESSION['khuyenmai']['id'] ?>">
                                      <th> Khuyến mại:<?php echo $_SESSION['khuyenmai']['phan_tram'] ?>(%)</th>
                                      <td><strong><?= number_format($tongtien * $_SESSION['khuyenmai']['phan_tram'] / 100) ?></strong></td>
                                  </tr>
                                  <tr class="order_total">
                                      <th>Còn Lại</th>
                                      <td><strong><?= number_format($tongtien - ($tongtien * $_SESSION['khuyenmai']['phan_tram']) / 100) ?></strong></td>
                                  </tr>
                              <?php
                                }
                                ?>

                          </tfoot>
                      </table>
                  </div>

                  <div class="card-body1">
                      <p>*Vui lòng kiểm tra lại đơn hàng và địa chỉ giao hàng của bạn! Xin cám ơn.</p>
                  </div>


              </div>
          </div>
      </div>
  </div>
  <!--Checkout page section end-->

  <!--brand area start-->

  <!--brand area end-->