<?php
is_array( $load_one_nd );
extract($load_one_nd);



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
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>	 	 	 	
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>May 10, 2018</td>
                                                <td><span class="success">Completed</span></td>
                                                <td>$25.00 for 1 item </td>
                                                <td><a href="cart.html" class="view">view</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>May 10, 2018</td>
                                                <td>Processing</td>
                                                <td>$17.00 for 1 item </td>
                                                <td><a href="cart.html" class="view">view</a></td>
                                            </tr>
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
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="index.php?act=edit_tk" method="post">
                                                <p>Already have an account? <a href="index.php?act=dangki">Log in instead!</a></p>
                                                <label>user name</label>
                                                <input type="text" name="user" value="<?=$user_name?>">
                                                <label>password</label>
                                                <input type="text" name="pass" value="<?=$pass?>">
                                                <label>Họ và Tên</label>
                                                <input type="text" name="fullname" value="<?=$ho_ten?>" >
                                                <label>Birthdate</label>
                                                <input type= "date" placeholder="MM/DD/YYYY" value="<?=$ngay_sinh?>" name="date">
                                                <label>Số Điện thoại</label>
                                                <input type="text" name="sdt" value="<?=$sdt?>" >
                                                <label>Email</label>
                                                <input type="text" name="email"  value="<?=$email?>">
                                                <label>Địa chỉ</label>
                                                <input type="Text" name="addr"  value="<?=$dia_chi?>" >
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