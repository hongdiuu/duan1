  <?php
    ?>
  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <ul>
                          <li><a href="index.php">home</a></li>
                          <li>Camera & Video </li>
                          <li>shop</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->

  <!--shop  area start-->
  <div class="shop_area shop_reverse mt-60 mb-60">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-12">
                  <!--sidebar widget start-->
                  <aside class="sidebar_widget">
                      <div class="widget_inner">
                          <div class="widget_list widget_categories">
                              <h3>Men</h3>
                              <ul>
                                  <li class="widget_sub_categories sub_categories1"><a href="javascript:void(0)">Danh mục sản phẩm</a>
                                      <?php
                                        foreach ($all_dm as $dm_sp) {
                                            extract($dm_sp);
                                            $link = "index.php?act=sanpham&iddm=" . $id;
                                            echo ' <ul class="widget_dropdown_categories dropdown_categories1">
                                    <li><a href="'. $link.'">' . $ten_dm . '</a></li>
                                    
                                </ul>';
                                        }
                                        ?>

                                  </li>

                              </ul>
                          </div>
                          <div class="widget_list widget_color">
                              <h3>Tìm kiếm theo màu</h3>
                              <ul>
                                  <li>
                                      <a href="#">Black <span>(6)</span></a>
                                  </li>
                                 

                              </ul>
                          </div>
                          <div class="widget_list widget_color">
                              <h3>Tìm kiếm theo SIZE</h3>
                              <ul>

                                  <li>
                                      <a href="#"> M <span>(8)</span></a>
                                  </li>
                                  <li>
                                      <a href="#">L <span>(10)</span></a>
                                  </li>
                                  <li>
                                      <a href="#"> XL <span>(6)</span></a>
                                  </li>
                                  <li>
                                      <a href="#">XLL <span>(4)</span></a>
                                  </li>

                              </ul>
                          </div>


                      </div>
                  </aside>
                  <!--sidebar widget end-->
              </div>
              <div class="col-lg-9 col-md-12">
                  <!--shop wrapper start-->
                  <!--shop toolbar start-->
                  <div class="shop_toolbar_wrapper">
                      <div class="shop_toolbar_btn">

                          <button data-role="grid_3" type="button" class="active btn-grid-3" data-bs-toggle="tooltip" title="3"></button>

                          <button data-role="grid_4" type="button" class=" btn-grid-4" data-bs-toggle="tooltip" title="4"></button>

                          <button data-role="grid_list" type="button" class="btn-list" data-bs-toggle="tooltip" title="List"></button>
                      </div>
                      <div class=" niceselect_option">
                          <form class="select_option" action="#">
                              <select name="orderby" id="short">

                                  <option selected value="1">Xắp xếp sản phẩm </option>
                                  <option value="2">Sort by popularity</option>

                              </select>
                          </form>
                      </div>
                      <div class="page_amount">
                          <p>tổng sản phẩm</p>
                      </div>
                  </div>
                  <!--shop toolbar end-->
                  <div class="row shop_wrapper">
                    <?php
                    foreach ($all_sp as $value) {
                        extract($value);
                        $link = "index.php?act=sanphamct&idsp=" . $id;
                    ?>
                    <div class="col-lg-4 col-md-4 col-12 ">
                          <article class="single_product">
                              <figure>
                                  <div class="product_thumb">
                                      <a class="primary_img" href="<?=$link?>"><img src="../../upload/<?=$anh_sp?>" alt=""></a>

                                      <div class="action_links">
                                          <ul>
                                              <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a></li>

                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product_content grid_content">
                                      <div class="product_content-header">
                                          <h4 class="product_name"><a href="<?=$link?>"><?=$ten_sp?></a></h4>
                                          <div class="wishlist-btn">
                                              <a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                          </div>
                                      </div>
                                      <div class="product_price_rating">
                                          <div class="price_box">
                                              <span class="current_price">$<?=$gia_sp?></span>
                                          </div>
                                          <div class="product_rating">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="product_content list_content">
                                      <h4 class="product_name"><a href="index.php?act=chitietsanpham"><?=$ten_sp?></a></h4>
                                      <div class="product_desc">
                                          <p><?=$mo_ta?></p>
                                      </div>
                                      <div class="product_price_rating">
                                          <div class="price_box">
                                              <span class="current_price"><?=$gia_sp?></span>
                                          </div>
                                      </div>
                                  </div>
                              </figure>
                          </article>
                      </div>
                 
            
                    <?php
                    }
                    
                    ?>
        
        </div>
                  <div class="shop_toolbar t_bottom">
                      <div class="pagination">
                          <ul>
                              <li class="current">1</li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li class="next"><a href="#">next</a></li>
                              <li><a href="#">>></a></li>
                          </ul>
                      </div>
                  </div>
                  <!--shop toolbar end-->
                  <!--shop wrapper end-->
              </div>
          </div>
      </div>
  </div>

  <?php
    // include "footer.php";

    ?>
  <!--shop  area end-->