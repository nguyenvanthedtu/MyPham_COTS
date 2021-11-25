<?php include "../admin/connect.php";include './update_Date.php';?>
<div class="row category-page-row">
                    <div class="col large-3 hide-for-medium ">
                        <div id="shop-sidebar" class="sidebar-inner col-inner">
                            <aside id="search-3" class="widget widget_search">
                                <form method="get" class="searchform" action="http://mauweb.monamedia.net/hachi/" role="search">
                                    <div class="flex-row relative">
                                        <div class="flex-col flex-grow">
                                            <input type="search" id="search_product" class="search-field mb-0" name="s" value="" id="s" placeholder="Tìm kiếm"/>
                                        </div>
                                        <!-- .flex-col -->
                                       
                                        <!-- .flex-col -->
                                    </div>
                                    <!-- .flex-row -->
                                    <div class="live-search-results text-left z-top"></div>
                                </form>
                            </aside>
                            <aside id="nav_menu-3" class="widget widget_nav_menu">
                                <span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
                                <div class="is-divider small"></div>
                                <div class="menu-menu-danh-muc-san-pham-container">
                                    <ul id="menu-menu-danh-muc-san-pham" class="menu">
                                    <?php  
                                        $sql = "SELECT * FROM danhmuc where TrangThai='1'";
                                        $result = mysqli_query($conn,$sql);
                                        while ($row = mysqli_fetch_array($result)){
                                            
                                    ?>
                                        <li id="menu-item-404" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-404">
                                            <a href="./header.php?url=sanpham&dm=<?php echo $row["MaDM"] ?>"><?php echo $row['TenDM'] ?></a>
                                        </li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </aside>
                           
                            
                        </div>
                        <!-- .sidebar-inner -->
                    </div>
            
<div class="col large-9" id="product_search">
                        <div class="shop-container">
                            <div class="woocommerce-notices-wrapper"></div>
                            <div class="products row row-small large-columns-3 medium-columns-3 small-columns-2 has-shadow row-box-shadow-2 row-box-shadow-3-hover">
                                <!--  -->
                              <?php 
                      
                        if(isset($_POST["search"])){
                        $search = $_POST['search'];
                           $qr="SELECT sp.MaSP,sp.TenSP,sp.HinhAnh,sp.DonGia,ct.TyLeKM,km.TrangThai FROM sanpham as sp LEFT JOIN ctkhuyenmai as ct on sp.MaSP=ct.MaSP LEFT JOIN khuyenmai as km on km.MaKM=ct.MaKM WHERE sp.TenSP LIKE '%$search%'";
                           
                        }
                           $result = mysqli_query($conn,$qr);
                           
                              if(mysqli_num_rows($result)>0){
                                 while($row = mysqli_fetch_array($result)){                      
                        ?>
                                <div class="product-small col has-hover product type-product post-284 status-publish first instock product_cat-cham-soc-toc product_cat-dau-goi has-post-thumbnail sale shipping-taxable purchasable product-type-variable">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1">
                                            <div class="callout badge badge-circle">
                                                <?php if($row["TyLeKM"]>0&&$row["TrangThai"]=="Đang khuyến mãi"){ ?>
                                                <div class="badge-inner secondary on-sale">
                                                    <span class="onsale"><?php echo $row["TyLeKM"]." %" ?></span>
                                                </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-fade_in_back">
                                                    <a href="./header.php?url=ctsanpham&id=<?php echo $row['MaSP'] ?>">
                                                        <img width="300" height="300" src="./assets/images/images_home/images_product/<?php echo $row['HinhAnh'] ?>"/>
                                                        <!-- <img width="300" height="300" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-300x300.jpg" class="show-on-hover absolute fill hide-for-small back-image" alt="" srcset="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-300x300.jpg 300w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-150x150.jpg 150w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-768x768.jpg 768w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-24x24.jpg 24w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-36x36.jpg 36w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-48x48.jpg 48w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-50x50.jpg 50w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-600x600.jpg 600w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-100x100.jpg 100w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master.jpg 900w" sizes="(max-width: 300px) 100vw, 300px"/> -->
                                                    </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover"></div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                                            </div>
                                            <!-- box-image -->
                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title">
                                                        <a href="./header.php?url=ctsanpham&id=<?php echo $row['MaSP'] ?>"><?php echo $row['TenSP']; ?></a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price">
                                                    <?php if($row["TyLeKM"]>0&&$row["TrangThai"]=="Đang khuyến mãi"){ ?>
                                                        <del>
                                                            <span class="woocommerce-Price-amount amount" style="font-size: 12px !important;">
                                                            <?php echo number_format($row["DonGia"],"0",",",".") ?><span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                            </span>
                                                        </del>
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount" style="font-size: 17px !important;">
                                                            <?php echo number_format($row["DonGia"]-($row["DonGia"]*$row["TyLeKM"]/100),"0",",",".") ?><span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                            </span>
                                                        </ins>
                                                           
                                                            <?php }else{?>
<span class="woocommerce-Price-amount amount" style="font-size: 17px !important;">
                                                            <?php echo number_format($row["DonGia"],"0",",",".") ?><span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                            </span>
                                                        <?php }?>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- box-text -->
                                        </div>
                                        <!-- box -->
                                    </div>
                                    <!-- .col-inner -->
                                </div>
                                <?php }}?>

    
                                <?php 
                               
                                if(isset($_POST["search"])){
                                    $search = $_POST['search'];
                                    $qr="SELECT sp1.MaSP,sp1.TenSP,sp1.HinhAnh,sp1.DonGia FROM sanpham as sp1 WHERE not EXISTS (SELECT sp.MaSP FROM sanpham as sp,ctkhuyenmai as ct,khuyenmai as km WHERE sp.MaSP=ct.MaSP and ct.MaKM=km.MaKM and km.TrangThai='Đang khuyến mãi' and sp1.MaSP=sp.MaSP) and sp1.TenSP LIKE '%$search%'";
                                     
                                    }
                                $result = mysqli_query($conn,$qr);
                                if(mysqli_num_rows($result)>0){
                                    while($row = mysqli_fetch_array($result)){ 
                                                           
                        ?>
                                <div class="product-small col has-hover product type-product post-284 status-publish first instock product_cat-cham-soc-toc product_cat-dau-goi has-post-thumbnail sale shipping-taxable purchasable product-type-variable">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1">
                                           
                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-fade_in_back">
                                                   
                                                    <a href="">
                                                        <img width="300" height="300"  src="./assets/images/images_home/images_product/<?php echo $row['HinhAnh'] ?>"/>
                                                        <!-- <img width="300" height="300" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-300x300.jpg" class="show-on-hover absolute fill hide-for-small back-image" alt="" srcset="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-300x300.jpg 300w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-150x150.jpg 150w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-768x768.jpg 768w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-24x24.jpg 24w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-36x36.jpg 36w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-48x48.jpg 48w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-50x50.jpg 50w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-600x600.jpg 600w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master-100x100.jpg 100w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/cascade_goi-back_767e38ddb14f49eab657f4ddc9084713_master.jpg 900w" sizes="(max-width: 300px) 100vw, 300px"/> -->
                                                    </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover"></div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                                            </div>
                                            <!-- box-image -->
                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title">
                                                        <a href="./header.php?url=ctsanpham&id=<?php echo $row['MaSP'] ?>"><?php echo $row['TenSP']; ?></a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price">
                                                       
                                                            <span class="woocommerce-Price-amount amount" style="font-size: 17px !important;">
                                                            <?php echo number_format($row["DonGia"],"0",",",".") ?><span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                            </span>
                                                       
                                                       
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- box-text -->
                                        </div>
                                        <!-- box -->
                                    </div>
                                    <!-- .col-inner -->
                                </div>
                                <?php }}?>
                                
                            <!-- row -->
                            <!-- <div class="container">
                                <nav class="woocommerce-pagination">
                                    <ul class="page-numbers nav-pagination links text-center">
                                        <li>
                                            <span aria-current="page" class="page-number current">1</span>
                                        </li>
                                        <li>
                                            <a class="page-number" href="http://mauweb.monamedia.net/hachi/mua/page/2/">2</a>
                                        </li>
                                        <li>
                                            <a class="next page-number" href="http://mauweb.monamedia.net/hachi/mua/page/2/">
                                                <i class="icon-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> -->
                        </div>
                        <!-- shop container -->
                    </div>
                </div>
<script src="../User/assets/js/modal.js"></script>