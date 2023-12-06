    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Liên Hệ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--contact map start-->
    <div class="contact_map mt-60">
       <div class="map-area">
          <div id="googleMap"><iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14894.691460348356!2d105.7334534673828!3d21.045771595539815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1701841083884!5m2!1svi!2s" width="1500" height="450" style="border:0; padding-left: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
       </div>
    </div>
    <!--contact map end-->
    
    <!--contact area start-->
    <div class="contact_area">
        <div class="container">   
            <div class="row">
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message content">
                        <h3>Liên Hệ</h3>    
                         <p style="text-align: justify;width: 485px;">Sự rõ ràng cũng là một quá trình năng động tuân theo những thói quen luôn thay đổi của người đọc.
                        Thật đáng ngạc nhiên khi lưu ý rằng văn học Gothic, thứ mà ngày nay chúng ta cho là ít rõ ràng,
                        đã có trước các hình thức văn học của con người như thế nào. kéo theo sự thay đổi trong thói
                        quen của độc giả. Thật đáng ngạc nhiên khi nhận thấy làm thế nào</p>
                        <ul>
                            <li><i class="fa fa-fax"></i>  Address :<?=$all_hethong[1]['diachi_cuahang']?></li>
                            <li><i class="fa fa-phone"></i> <a href="#"><?=$all_hethong[1]['email_cuahang']?></a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="tel:0(1234)567890"><?=$all_hethong[1]['sdt_cuahang']?></a>  </li>
                        </ul>             
                    </div> 
                </div>
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message form">
                        <h3>Hãy cho chúng tôi biết mong muốn của bạn </h3>   
                        <form  action="index.php?act=add_lh" method="POST" >
                            <p>  
                               <label>Tên khách hàng</label>
                                <input name="name" value="<?php if (isset($_SESSION['user']['']) and $_SESSION['user']['']!="") echo $_SESSION['user'][''] ?>" type="text"> 
                            </p>
                          
                            <div class="contact_textarea">
                                <label>  Tin nhắn của bạn</label>
                                <textarea placeholder="Nội dung *" name="noidung"  class="form-control2" ></textarea>     
                            </div> 
                            <?php
                            if (isset($_SESSION['user']) and $_SESSION['user']) {
                                ?>
                                <button type="submit" name="gui"> Gửi</button>
                            <?php 
                            } else{
                                ?>
                                <p style="color: red;">*Bạn hãy đăng nhập để gửi liên hệ với chúng tôi !</p>
                                <?php
                            }
                            ?>
                           <?php
                            if (isset($thongbao) && ($thongbao) != "") {
                                echo $thongbao;
                            }
                            ?>  
                            <p class="form-messege"></p>
                        </form> 

                    </div> 
                </div>
            </div>
        </div>    
    </div>

    <!--contact area end-->

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