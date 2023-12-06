<?php

?>

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>My account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- my account start  -->
<section class="main_content_area">
    <div class="container">
        <div class="account_dashboard">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Bảng điều khiển</a></li>
                            <li> <a href="#orders" data-bs-toggle="tab" class="nav-link">Đơn hàng</a></li>
                            <li><a href="#account-details" data-bs-toggle="tab" class="nav-link">Thông tin tài khoản</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="dashboard">
                            <h3>Dashboard </h3>
                            <p>Từ trang tổng quan tài khoản của bạn. bạn có thể dễ dàng kiểm tra & xem các đơn đặt hàng gần đây của bạn, quản lý địa chỉ giao hàng và thanh toán và Chỉnh sửa mật khẩu và chi tiết tài khoản của bạn.</p>
                        </div>


                        <div class="tab-pane fade" id="orders">
                            <h3>Orders</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Đơn hàng</th>
                                            <th>Ngày đặt</th>
                                            <th>Tổng đơn</th>
                                            <th>Trạng thái</th>
                                            <th>Chi tiết</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($list_donhang as $donhang) {
                                            extract($donhang);
                                            if (isset($donhang['trang_thai']) && $donhang['trang_thai']) {
                                                $tt=$donhang['trang_thai'];
                                            }else{
                                                $tt=0;
                                            }
                                            $ttdh = trangthai_donhang(  $tt);
                                        ?>
                                            <tr>
                                                <td>MHD-0<?= $id ?></td>
                                                <td><?= $ngay_dat ?></td>
                                                <td><?=number_format($tong_hd)  ?> <b>for</b> <?= $so_item ?> item </td>
                                                <td><span class="success"><?= $ttdh ?></span></td>
                                                <td><a href="cart.html" class="view">view</a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- <div class="tab-pane" id="address">
                               <p>The following addresses will be used on the checkout page by default.</p>
                                <h4 class="billing-address">Billing address</h4>
                                <a href="#" class="view">Edit</a>
                                <p><strong>Bobby Jackson</strong></p>
                                <address>
                                    House #15<br>
                                    Road #1<br>
                                    Block #C <br>
                                    Banasree <br>
                                    Dhaka <br>
                                    1212
                                </address>
                                <p>Bangladesh</p>   
                            </div> -->


                        <div class="tab-pane fade" id="account-details">
                            <h3>chi tiêt tài khoản </h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <form action="index.php?act=edit_tk" method="post">
                                            <p>Already have an account? <a href="index.php?act=dangki_tk">Log in instead!</a></p>
                                            <label>user name</label>
                                            <input type="text" name="user" value="<?php if (isset($user_name) && ($user_name != "")) echo $user_name; ?>">
                                            <label>password</label>
                                            <input type="text" name="pass" value="<?php if (isset($pass) && ($pass != "")) echo $pass; ?>">
                                            <label>Họ và Tên</label>
                                            <input type="text" name="fullname" value="<?php if (isset($ho_ten) && ($ho_ten != "")) echo $ho_ten; ?>">
                                            <label>Birthdate</label>
                                            <input type="date" placeholder="MM/DD/YYYY" name="date" value="<?php if (isset($ngay_sinh) && ($ngay_sinh != "")) echo $ngay_sinh; ?>">
                                            <label>Số Điện thoại</label>
                                            <input type="text" name="sdt" value="<?php if (isset($sdt) && ($sdt != "")) echo $sdt ?>">
                                            <label>Email</label>
                                            <input type="text" name="chidiu" value="<?php if (isset($chidiu) && ($chidiu != "")) echo $chidiu; ?>">
                                            <label>Địa chỉ</label>
                                            <input type="Text" name="addr" value="<?php if (isset($dia_chi) && ($dia_chi != "")) echo $dia_chi; ?>">
                                            <br>
                                            <div class="save_button primary_btn default_button">
                                                <input class="dangki" name="capnhat" style="width: 150px; " type="submit" value="Save">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account end   -->

<!--brand area start-->
<div class="brand_area color_five">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand_container owl-carousel">
                    <div class="single_brand">
                        <a href="#"><img src="../../thu_vien/asset/img/brand/brand1.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="../../thu_vien/asset/img/brand/brand2.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="../../thu_vien/asset/img/brand/brand3.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="../../thu_vien/asset/img/brand/brand4.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="../../thu_vien/asset/img/brand/brand5.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="../../thu_vien/asset/img/brand/brand6.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="../../thu_vien/asset/img/brand/brand2.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--brand area end-->