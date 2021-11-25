<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi-VN" class="loading-site no-js">

<head>
    <meta charset="UTF-8" />
    <title>Menly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel='dns-prefetch' href='//mauweb.monamedia.net' />
    <link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Dòng thông tin Hachi Mona &raquo;" href="http://mauweb.monamedia.net/hachi/feed/" />
    <link rel="stylesheet" href="./assets/css/home.css">
    
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    
    <link rel='stylesheet' id='menu-image-css' href='http://mauweb.monamedia.net/hachi/wp-content/plugins/menu-image/includes/css/menu-image.css?ver=2.9.6' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-icons-css' href='http://mauweb.monamedia.net/hachi/wp-content/themes/flatsome/assets/css/fl-icons.css?ver=3.3' type='text/css' media='all' />
    <link rel='stylesheet' id='bfa-font-awesome-css' href='//cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-main-css' href='http://mauweb.monamedia.net/hachi/wp-content/themes/flatsome/assets/css/flatsome.css?ver=3.10.4' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-style-css' href='http://mauweb.monamedia.net/hachi/wp-content/themes/flatsome-child/style.css?ver=3.0' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-googlefonts-css' href='//fonts.googleapis.com/css?family=Roboto%3Aregular%2C700%2Cregular%2C700%2Cregular&#038;display=swap&#038;ver=3.9' type='text/css' media='all' />
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
   
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://mauweb.monamedia.net/hachi/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://mauweb.monamedia.net/hachi/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.3.4" />
    <meta name="generator" content="WooCommerce 3.9.2" />
    <link rel="canonical" href="http://mauweb.monamedia.net/hachi/" />
    <link rel='shortlink' href='http://mauweb.monamedia.net/hachi/' />
    <link rel="alternate" type="application/json+oembed" href="http://mauweb.monamedia.net/hachi/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fmauweb.monamedia.net%2Fhachi%2F" />
    <link rel="alternate" type="text/xml+oembed" href="http://mauweb.monamedia.net/hachi/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fmauweb.monamedia.net%2Fhachi%2F&#038;format=xml" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c52f7154f4.js" crossorigin="anonymous"></script>
    <style>
        .bg {
            opacity: 0;
            transition: opacity 1s;
            -webkit-transition: opacity 1s;
        }

        .bg-loaded {
            opacity: 1;
        }
    </style>
  
    <!-- Set favicon website -->
    <link rel="icon" href="./assets/images/images_home/favicon.PNG" sizes="32x32" />
    <link rel="icon" href="./assets/images/images_home/favicon.PNG" sizes="192x192" />
    <meta name="msapplication-TileImage" content="http://mauweb.monamedia.net/hachi/wp-content/uploads/2019/12/cropped-icon-mona-01-270x270.png" />
    <style id="custom-css" type="text/css">
        :root {
            --primary-color: #797c11;
        }

        .full-width .ubermenu-nav,
        .container,
        .row {
            max-width: 1230px
        }

        .row.row-collapse {
            max-width: 1200px
        }

        .row.row-small {
            max-width: 1222.5px
        }

        .row.row-large {
            max-width: 1260px
        }

        body.framed,
        body.framed header,
        body.framed .header-wrapper,
        body.boxed,
        body.boxed header,
        body.boxed .header-wrapper,
        body.boxed .is-sticky-section {
            max-width: 1260px
        }

        .header-main {
            height: 96px
        }

        #logo img {
            max-height: 96px;
            transform: translateY(-7px);
        }

        #logo {
            width: 200px;
        }

        .header-top {
            min-height: 30px
        }

        .transparent .header-main {
            height: 265px
        }

        .transparent #logo img {
            max-height: 265px
        }

        .has-transparent+.page-title:first-of-type,
        .has-transparent+#main>.page-title,
        .has-transparent+#main>div>.page-title,
        .has-transparent+#main .page-header-wrapper:first-of-type .page-title {
            padding-top: 295px;
        }

        .header.show-on-scroll,
        .stuck .header-main {
            height: 96px !important
        }

        .stuck #logo img {
            max-height: 96px !important
        }

        .search-form {
            width: 60%;
        }

        .header-bottom {
            background-color: #f1f1f1
        }

        .header-main .nav>li>a {
            line-height: 40px
        }

        .stuck .header-main .nav>li>a {
            line-height: 35px
        }

        @media (max-width: 549px) {
            .header-main {
                height: 70px
            }
            #logo img {
                max-height: 70px
            }
        }

        .nav-dropdown {
            border-radius: 5px
        }

        .nav-dropdown {
            font-size: 101%
        }

        .header-top {
            background-color: #ffffff !important;
        }

        /* Color */

        .accordion-title.active,
        .has-icon-bg .icon .icon-inner,
        .logo a,
        .primary.is-underline,
        .primary.is-link,
        .badge-outline .badge-inner,
        .nav-outline>li.active>a,
        .nav-outline>li.active>a,
        .cart-icon strong,
        [data-color='primary'],
        .is-outline.primary {
            color: #797c11;
        }

        /* Color !important */

        [data-text-color="primary"] {
            color: #797c11 !important;
        }

        /* Background Color */

        [data-text-bg="primary"] {
            background-color: #797c11;
        }

        /* Background */

        .scroll-to-bullets a,
        .featured-title,
        .label-new.menu-item>a:after,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        button[type="submit"],
        .button.wc-forward:not(.checkout):not(.checkout-button),
        .button.submit-button,
        .button.primary:not(.is-outline),
        .featured-table .title,
        .is-outline:hover,
        .has-icon:hover .icon-label,
        .nav-dropdown-bold .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold>li>a:hover,
        .nav-dropdown-bold.dark .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
        .is-outline:hover,
        .tagcloud a:hover,
        .grid-tools a,
        input[type='submit']:not(.is-form),
        .box-badge:hover .box-text,
        input.button.alt,
        .nav-box>li>a:hover,
        .nav-box>li.active>a,
        .nav-pills>li.active>a,
        .current-dropdown .cart-icon strong,
        .cart-icon:hover strong,
        .nav-line-bottom>li>a:before,
        .nav-line-grow>li>a:before,
        .nav-line>li>a:before,
        .banner,
        .header-top,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover,
        .button.primary:not(.is-outline),
        input[type='submit'].primary,
        input[type='submit'].primary,
        input[type='reset'].button,
        input[type='button'].primary,
        .badge-inner {
            background-color: #797c11;
        }

        /* Border */

        .nav-vertical.nav-tabs>li.active>a,
        .scroll-to-bullets a.active,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        .accordion-title.active,
        .featured-table,
        .is-outline:hover,
        .tagcloud a:hover,
        blockquote,
        .has-border,
        .cart-icon strong:after,
        .cart-icon strong,
        .blockUI:before,
        .processing:before,
        .loading-spin,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover {
            border-color: #797c11
        }

        .nav-tabs>li.active>a {
            border-top-color: #797c11
        }

        .widget_shopping_cart_content .blockUI.blockOverlay:before {
            border-left-color: #797c11
        }

        .woocommerce-checkout-review-order .blockUI.blockOverlay:before {
            border-left-color: #797c11
        }

        /* Fill */

        .slider .flickity-prev-next-button:hover svg,
        .slider .flickity-prev-next-button:hover .arrow {
            fill: #797c11;
        }

        /* Background Color */

        [data-icon-label]:after,
        .secondary.is-underline:hover,
        .secondary.is-outline:hover,
        .icon-label,
        .button.secondary:not(.is-outline),
        .button.alt:not(.is-outline),
        .badge-inner.on-sale,
        .button.checkout,
        .single_add_to_cart_button,
        .current .breadcrumb-step {
            background-color: #797c11;
        }

        [data-text-bg="secondary"] {
            background-color: #797c11;
        }

        /* Color */

        .secondary.is-underline,
        .secondary.is-link,
        .secondary.is-outline,
        .stars a.active,
        .star-rating:before,
        .woocommerce-page .star-rating:before,
        .star-rating span:before,
        .color-secondary {
            color: #797c11
        }

        /* Color !important */

        [data-text-color="secondary"] {
            color: #797c11 !important;
        }

        /* Border */

        .secondary.is-outline:hover {
            border-color: #797c11
        }

        body {
            font-family: "Roboto", sans-serif
        }

        body {
            font-weight: 0
        }

        .nav>li>a {
            font-family: "Roboto", sans-serif;
        }

        .nav>li>a {
            font-weight: 700;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font,
        .off-canvas-center .nav-sidebar.nav-vertical>li>a {
            font-family: "Roboto", sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font,
        .banner h1,
        .banner h2 {
            font-weight: 700;
        }

        .alt-font {
            font-family: "Roboto", sans-serif;
        }

        .alt-font {
            font-weight: 0 !important;
        }

        a {
            color: #797c11;
        }

        a:hover {
            color: #111111;
        }

        .tagcloud a:hover {
            border-color: #111111;
            background-color: #111111;
        }

        @media screen and (min-width: 550px) {
            .products .box-vertical .box-image {
                min-width: 300px !important;
                width: 300px !important;
            }
        }

        .absolute-footer,
        html {
            background-color: #ffffff
        }

        .label-new.menu-item>a:after {
            content: "New";
        }

        .label-hot.menu-item>a:after {
            content: "Hot";
        }

        .label-sale.menu-item>a:after {
            content: "Sale";
        }

        .label-popular.menu-item>a:after {
            content: "Popular";
        }
    </style>
</head>
<?php include "../admin/connect.php";include './update_Date.php';?>

<body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-6 theme-flatsome woocommerce-no-js header-shadow lightbox">


    

    <div id="wrapper">


        <header id="header" class="header has-sticky sticky-jump">
            <div class="header-wrapper">
                <div id="top-bar" class="header-top hide-for-sticky">
                    <div class="flex-row container">
                        <div class="flex-col hide-for-medium flex-left">
                            <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                                <li class="html custom html_topbar_right">
                                    <p class="mona-html hotline"><a href="#">1900 636 648</a></p>
                                </li>
                                <li class="html custom html_top_right_text">
                                    <p class="mona-html email"><a href="#"><span class="__cf_email__" data-cfemail="a5c8cacbe5c8cacbc48bc8c0c1ccc4">menly@gmail.com</span></a></p>
                                </li>
                                <li class="html custom html_nav_position_text_top">
                                    <p class="mona-html hethong"><a href="#">Hệ thống cửa hàng </a></p>
                                </li>
                            </ul>
                        </div>
                        <!-- flex-col left -->

                        <div class="flex-col hide-for-medium flex-center">
                            <ul class="nav nav-center nav-small  nav-divided">
                            </ul>
                        </div>
                        <!-- center -->

                        <div class="flex-col hide-for-medium flex-right">
                            <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
                                <li class="account-item has-icon
    ">
    <?php if(isset($_SESSION["user"])==null) { ?>
    <a href="../DangNhap/dangnhap.php" class="nav-top-link nav-top-not-logged-in is-small"><span style="padding-right: 10px;">Đăng nhập</span></a>
    <a href="../DangKy/dangky.php" class="nav-top-link nav-top-not-logged-in is-small"><span>Đăng ký</span></a>  
    <?php }else { ?>
    <a href="./user.php" class="nav-top-link nav-top-not-logged-in is-small"><span style="padding-right: 10px;">Xin chào, <?php $user=$_SESSION["user"]; $qr="select * from taikhoan where TenDangNhap='$user'";$result=mysqli_query($conn,$qr);while ($row = mysqli_fetch_array($result)) echo $row['HoTen'];?></span></a>               
    <a href="./dangxuat.php" class="nav-top-link nav-top-not-logged-in is-small"><span>Thoát</span></a>                         
    <?php }?>
    <!-- .account-login-link -->



                                </li>
                            </ul>
                        </div>
                        <!-- .flex-col right -->

                        <div class="flex-col show-for-medium flex-grow">
                            <ul class="nav nav-center nav-small mobile-nav  nav-divided">
                                <li class="html custom html_topbar_left">
                                    <p class="mona-html showroom"><strong>HOME: </strong>319 - C16 Lý Thường Kiệt, P.15, Q.11, Tp.HCM</p>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- .flex-row -->
                </div>
                <!-- #header-top -->
                <div id="masthead" class="header-main ">
                    <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                   
                        <!-- Logo -->
                        <div id="logo" class="flex-col logo">
                            <!-- Header logo -->
                            <a href="#" title="Menly" rel="home">
    <img src="./assets/images/images_home/logo_ciel.png" class="header_logo header-logo" alt="Menly"/><img  width="200" height="96" src="./assets/images/images_home/logo.png" class="header-logo-dark" alt="Menly"/></a>
                        </div>

                        <!-- Mobile Left Elements -->
                        <div class="flex-col show-for-medium flex-left">
                            <ul class="mobile-nav nav nav-left ">
                                <li class="nav-icon has-icon">
                                    <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
		
		  <i class="icon-menu" ></i>
		  		</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Left Elements -->
                        <div class="flex-col hide-for-medium flex-left
            flex-grow">
                            <ul class="header-nav header-nav-main nav nav-left  nav-uppercase">
                                <li id="menu-item-207" class="has-icon-left menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-207 has-dropdown"><a href="home.php" class="nav-top-link"><span class='menu-image-hover-wrapper'><i class="fas fa-home" id="icon-icon"></i></span><span class="menu-image-title-below menu-image-title">Trang Chủ</span><i class="icon-angle-down" ></i></a>
                                <li id="menu-item-207" class="has-icon-left menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-207 has-dropdown"><a href="./header.php?url=sanpham&page=1" class="nav-top-link"><span class='menu-image-hover-wrapper'><i class="fas fa-air-freshener" id="icon-icon"></i></span><span class="menu-image-title-below menu-image-title">Sản Phẩm</span><i class="icon-angle-down" ></i></a>
                            
                            <ul class='nav-dropdown nav-dropdown-simple'>
                            <?php  
                               $sql = "SELECT * FROM danhmuc where TrangThai='1'";
                               $result = mysqli_query($conn,$sql);
                               while ($row = mysqli_fetch_array($result)){
                                   
                           ?>
                           <li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-206"><a href="./header.php?url=sanpham&page=1&dm=<?php echo $row["MaDM"] ?>"><?php echo $row["TenDM"];?></a></li>
                           <?php }?>
                       </ul>
                       </li>
                                <li id="menu-item-207" class="has-icon-left menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-207 has-dropdown"><a href="" class="nav-top-link"><span class='menu-image-hover-wrapper'><i class="far fa-newspaper" id="icon-icon"></i></span><span class="menu-image-title-below menu-image-title">Tin Tức</span><i class="icon-angle-down" ></i></a>

                                <!-- <li id="menu-item-207" class="has-icon-left menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-207 has-dropdown"><a href="" class="nav-top-link"><i class="icon-hachi" ></i><span class='menu-image-hover-wrapper'><img width="34" height="34" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/hd_mainmenu_icon3.png" class="menu-image menu-image-title-below" alt="" /><img width="34" height="34" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/hd_mainmenu_icon_hover3.png" class="hovered-image menu-image-title-below" alt="" style="margin-left: -34px;" /></span><span class="menu-image-title-below menu-image-title">Tin Tức</span><i class="icon-angle-down" ></i></a> -->
                                    <ul class='nav-dropdown nav-dropdown-simple'>
                                    <li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-206"><a href="./vechungtoi.php"> Về chúng tôi</a></li>
                                        <li id="menu-item-205" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-205"><a href="./tamnhin_cotloi.php">Tầm nhìn – Sứ mệnh – Giá trị cốt lõi</a></li>
                                        <li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-36"><a href="./lienhe.php">Liên hệ</a></li>
                                        <li id="menu-item-204" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-204"><a href="./hethongpp_banle.php">Hệ thống phân phối và bán lẻ</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-207" class="has-icon-left menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-207 has-dropdown"><a href="" class="nav-top-link"><span class='menu-image-hover-wrapper'><i class="fab fa-cotton-bureau" id="icon-icon"></i></span><span class="menu-image-title-below menu-image-title">Về Menly</span><i class="icon-angle-down" ></i></a>

                                    <ul class='nav-dropdown nav-dropdown-simple'>
                                        <li id="menu-item-208" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-208"><a href="">Khuyến mãi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!-- Right Elements -->
                        <div class="flex-col hide-for-medium flex-right">
                            <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                                <li class="cart-item has-icon has-dropdown">

                                    <a href="" title="Giỏ hàng" class="header-cart-link is-small">


<span class="header-cart-title">
   Giỏ hàng     </span>
   <span class="image-icon header-cart-icon" data-icon-label="<?php if(isset($_SESSION['cart']) && $_SESSION['cart']!=null ){ echo count($_SESSION['cart']);}?>">
    <img class="cart-img-icon" alt="Giỏ hàng" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/hd_mainmenu_icon_cart.png"/>
  </span><!-- .cart-img-inner -->
</a>
                                   
                                    </header>
        
        <div class="main">
            <h1>HỆ THỐNG PHÂN PHỐI VÀ BÁN LẺ</h1>
            <p>
                <strong>
                    Sản phẩm của Mỹ phẩm thiên nhiên Menly Việt Nam đang được phân phối tại các siêu thị và cửa hàng bán lẻ trên toàn quốc.
                </strong>
            </p>
            <p>
                <strong> 
                    Hệ thông siêu thị:
                </strong>
            </p>
            <table>
                <tbody >
                    <tr>
                        <td><strong> Siêu thị </strong></td>
                        <td><strong> Tên siêu thị</strong> </td>
                        <td><strong> Địa chỉ </strong> </td>
                    </tr>
                    <tr>
                        <td rowspan="25"> 
                            <strong> Hệ thống Siêu thị VINMART</strong>  
                        </td>
                         <td>VM Thăng Long </td>
                         <td>72 Trần Đăng Ninh- Tòa nhà Thăng Long</td>
                    </tr>
                    <tr>
                        <td>VM Long Biên </td>
                        <td>L1-101 – TTTM Vincom Long Biên Việt Hưng – Long Biên – Hà Nội </td>
                    </tr>
                    <tr>
                         <td>VM Hạ Long </td>
                          <td>L2 TTTM Vincom Plaza Hạ Long, P, Bạch Đằng, Thành phố Hạ Long,  </td>
                    </tr>
                    <tr>
                        <td>VM Nguyễn Chí Thanh </td>
                        <td>56 Nguyễn Chí Thanh, Láng Thượng, Đống Đa, Hà Nội </td>
                    </tr>
                    <tr>
                        <td>VM Times City  </td>
                        <td>458 Minh Khai, Tầng 2, Times City, Hà Nội </td>
                    </tr>
                    <tr>
                        <td>VM Trung Hòa  </td>
                        <td>34 Hoàng Đạo Thúy, Trung Hòa Nhân Chính, Trung Hoà, Cầu Giấy, Hà Nội  </td>
                    </tr>
                    <tr>
                        <td>VM Royal City  </td>
                        <td>R4 Royal City, Thanh Xuân, 72 Nguyễn Trãi, Thượng Đình, Thanh Xuân, Hà Nội </td>
                    </tr>
                    <tr>
                        <td>VM Hà Đông  </td>
                        <td>Tòa nhà CT1A,B – Khu đô thị Xa La – Phúc La – Hà Đông – Hà Nội.  </td>
                    </tr>
                    <tr>
                        <td>VM Việt Trì  </td>
                        <td>Tiên Cát, Tp. Việt Trì, Phú Thọ  </td>
                    </tr>
                    <tr>
                        <td>VM Thuỵ Khuê  </td>
                        <td>Tòa nhà Sun Plaza : 69B Thụy Khuê, Tây Hồ ,Hà Nội  </td>
                    </tr>
                    <tr>
                        <td>Big C Hồ Gươm  </td>
                        <td>Tầng 1 – 2 Hồ Gươm Plaza, 110 Trần Phú, Quận Hà Đông, Hà Nội </td>
                    </tr>
                    <tr>
                        <td>Big C Hải Phòng  </td>
                        <td>Lô 1/20 Khu đô thị mới nga năm sân bay Cát Bi,P Đằng Giang,Q Ngô Quyền, TP Hải Phòng  </td>
                    </tr>
                    <tr>
                        <td>ESPACE Big C GARDEN MALL  </td>
                        <td> Tầng 1 TTTM The Garden Đường Mễ Trì ,Nam Từ Liêm,Hà Nội  </td>
                    </tr>
                    <tr>
                        <td>Big C Vĩnh Phúc   </td>
                        <td>Khu TTTM Vĩnh Phúc , Phường Khai Quan, Tỉnh Vĩnh Phúc  </td>
                    </tr>
                    <tr>
                        <td>Big C Nam Định  </td>
                        <td>Siêu Thị Thiên Trường,Xã Lộc Hoa,Tỉnh Nam Định  </td>
                    </tr>
                    <tr>
                        <td>Big C Long Biên  </td>
                        <td>7-9 Nguyễn Văn Linh- Long Biên , Hà Nội </td>
                    </tr>
                    <tr>
                        <td>Cty TNHH EB Hải Dương  </td>
                        <td>KM54+100, QL5, Khu 3,Phường Nhi Châu,TP Hải Dương  </td>
                    </tr>
                    <tr>
                        <td>Cty TNHH EB Thanh Hóa </td>
                        <td>Phố Đông Lê,Phường ĐôngHải, TP Thanh Hóa  </td>
                    </tr>
                    <tr>
                        <td>Big C Mê Linh  </td>
                        <td>KM8. Tầng 1 TTTM Mê Linh Plaza, TT Quang Minh, Mê Linh, Hà Nội  </td>
                    </tr>
                    <tr>
                        <td>Big C Việt Trì  </td>
                        <td>Nguyễn Tất Thành,Phường Thanh   Miếu, TP Việt Trì,Tỉnh Phú Thọ,  </td>
                    </tr>
                    <tr>
                        <td>Big C Ninh Bình  </td>
                        <td>Đường Trân Nhân Tông,Xã Ninh Phúc, TP Ninh Bình  </td>
                    </tr>
                    <tr>
                        <td>Big C Hạ Long  </td>
                        <td>Cột 5,P Hồng Hải, TP hạ Long, Tỉnh Quảng Ninh  </td>
                    </tr>
                    <tr>
                        <td>Big C Bắc Giang  </td>
                        <td>Thôn Xuân, Xã Tân Tiến,TP Bắc Giang  </td>
                    </tr>
                    <tr>
                        <td>Big C Lê Trọng Tấn  </td>
                        <td>  Toà nhà  Artemis ,Số 3 Lê Trọng Tấn, Thanh Xuân , Hà Nội  </td>
                    </tr>
                    <tr>
                        <td>Big C Thăng Long  </td>
                        <td>Số 222 Trần Duy Hưng, Cầu Giấy </td>
                    </tr>
                    <tr>
                        <td rowspan="1">
                            <strong>Siêu Thị Việt ý </strong>
                        </td>
                        <td>ST Việt Ý  </td>
                        <td>ST Việt Ý – Kim Văn – Kim Lũ  </td>
                    </tr>
                    <tr>
                        <td rowspan="1">
                            <strong> Siêu thị TeeKiu Mart</strong>
                        </td>
                        <td>TeeKiu Mart  </td>
                        <td>36A Vạn Bảo- Liễu Giai  </td>
                    </tr>
                    <tr>
                        <td >
                            <strong> Siêu thị Thành Công</strong>
                        </td>
                        <td > Thành công </td>
                        <td >Số 86, Lê Trọng Tấn, Khương Mai, Thanh Xuân, Hà Nội</td> 
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td> 352, Giải Phóng, Thanh Xuân, Hà Nội</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>193 Vĩnh Hưng, Hoàng Mai, Hà Nội</td>
                    </tr>
                   <tr>
                        <td >
                            <strong>Hệ thống siêu thị Thành Đô </strong>
                        </td>
                        <td>Hà Nội  </td>
                        <td>27 Lạc Trung, Hai Bà Trưng, Hà Nội  </td>
                   </tr>
                   <tr>
                       <td></td>
                       <td></td>
                       <td>306 Hồ Tùng Mậu, Từ Liêm, Hà Nội</td>
                   </tr>
                        <tr>
                            <td></td>
                       <td></td>
                       <td>273 Lĩnh Nam, Hoàng Mai ,Hà nội</td>
                   </tr>
                   </tr>
                    <tr>
                        <td rowspan="1">
                            <strong>Siêu Thị Hoàng Cầu </strong>
                        </td>
                        <td>Siêu Thị Hoàng Cầu  </td>
                        <td>Ngõ 59, Hoàng Cầu, P. Ô Chợ Dừa, Q. Đống Đa, Tp. Hà Nội </td>
                    </tr>
                     <tr>
                        <td >
                            <strong>Cửa hàng phân phối Mỹ phẩm Linh Giang</strong>
                        </td>
                        <td > LINH GIANG </td>
                        <td >26A Hàng Đường, Hà Nội</td> 
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td> 16 Bạch Mai, Hai Bà trưng, Hà nội</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>41 Xuân Thủy, Cầu Giấy, Hà Nội</td>
                    </tr>
                     <tr>
                        <td >
                            <strong> Hệ thống cửa hàng phân phối Mỹ Phẩm Xuân Thuỳ</strong>
                        </td>
                        <td > Hà Nội </td>
                        <td >38 Khâm Thiên, Đống Đa, Hà Nội</td> 
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td> 86 Trần Duy Hưng, Cầu Giấy, Hà Nội</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>358 Nguyễn Trãi , Thanh Xuân , Hà Nội</td>
                    </tr>
                  
                </tbody>
                
            </table>
            
            <style>
                .main h1{
                    color:#049372;
                    text-align: center;
                    margin: 30px 30px;
                }
                .main{
                    padding-left: 30px;
                }
                </style>
        </div>
        
        
        
        
         <footer id="footer" class="footer-wrapper">

            <section class="section" id="section_328236419">
                <div class="bg section-bg fill bg-fill  bg-loaded">





                </div>
                <!-- .section-bg -->

                <div class="section-content relative">


                    <div id="gap-647088397" class="gap-element clearfix" style="display:block; height:auto;">

                        <style scope="scope">
                            #gap-647088397 {
                                padding-top: 0px;
                            }
                        </style>
                    </div>



                </div>
                <!-- .section-content -->


                <style scope="scope">
                    #section_328236419 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                        background-color: rgb(244, 244, 244);
                    }
                </style>
            </section>

            <section class="section sec-footer dark" id="section_343530008">
                <div class="bg section-bg fill bg-fill  bg-loaded">





                </div>
                <!-- .section-bg -->

                <div class="section-content relative">


                    <div id="gap-270070949" class="gap-element clearfix" style="display:block; height:auto;">

                        <style scope="scope">
                            #gap-270070949 {
                                padding-top: 40px;
                            }
                        </style>
                    </div>


                    <div class="row align-center row-footer" id="row-353601431">

                        <div class="col medium-6 small-12 large-3">
                            <div class="col-inner">

                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1384115679">
                                    <div class="img-inner dark">
                                        <img width="900" height="195" src="./assets/images/images_home/logo_ciel.png"
                                            sizes="(max-width: 900px) 100vw, 900px" />
                                    </div>

                                    <style scope="scope">
                                        #image_1384115679 {
                                            width: 75%;
                                        }
                                    </style>
                                </div>



                                <div class="icon-box featured-box icon-box-left text-left">
                                    <div class="icon-box-img" style="width: 20px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <?xml version="1.0" encoding="iso-8859-1"?>
                                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 440 440" style="enable-background:new 0 0 440 440;" xml:space="preserve">
</svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">


                                        <p class="txt-footer1"></p>

                                    </div>
                                </div>
                                <!-- .icon-box -->



                                <div class="icon-box featured-box icon-box-left text-left">
                                    <div class="icon-box-img" style="width: 20px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <?xml version ="1.0" encoding="iso-8859-1"?>
                                                <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612px" height="612px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
<g>
	<path d="M586.923,256.013c-7.959-8.24-16.655-13.074-24.53-15.916c10.798-62.807,8.812-97.901-246.643-178.322
		C55.771-20.07,26.688,13.85,5.274,81.869L1.622,93.471c-5.794,18.406,4.43,38.025,22.836,43.82l83.405,26.257
		c18.407,5.794,38.025-4.43,43.82-22.836l3.652-11.602c16.587-52.69,97.773-28.905,143.76-14.428
		c45.986,14.477,126.155,41.49,109.568,94.18l-3.653,11.601c-5.794,18.406,4.43,38.025,22.836,43.82l83.405,26.257
		c18.406,5.795,38.025-4.429,43.82-22.835l2.369-8.038c4.933,2.036,10.229,5.149,15.123,10.215
		c17.553,18.182,23.378,53.308,16.842,101.589c-11.335,83.657-44.21,113.537-79.221,123.481v-14.553
		c0-14.775-3.693-29.4-11.181-42.179c-34.94-59.797-84.556-112.856-147.598-159.626v-35.34c0-2.745-2.246-4.992-4.991-4.992h-51.862
		c-2.795,0-4.992,2.247-4.992,4.992v35.139h-59.199v-35.139c0-2.745-2.246-4.992-4.992-4.992H173.46
		c-2.746,0-4.992,2.247-4.992,4.992v35.139C105.326,325.264,55.661,378.322,20.67,438.22C13.183,450.998,9.49,465.623,9.49,480.397
		v32.894c0,46.87,37.985,84.855,84.854,84.855h330.984c46.136,0,83.581-36.824,84.745-82.679
		c56.115-13.143,87.95-58.928,99.111-141.316C616.681,318.816,609.189,279.069,586.923,256.013z M346.544,481.271l-33.304-11.858
		c3.533-7.12,5.57-15.115,5.57-23.606c0-29.35-23.809-53.159-53.208-53.159c-29.35,0-53.209,23.81-53.209,53.159
		c0,29.4,23.859,53.21,53.209,53.21c10.87,0,20.965-3.271,29.386-8.859l18.266,30.026c-13.76,8.835-30.087,14.022-47.652,14.022
		c-48.817,0-88.349-39.582-88.349-88.398c0-48.767,39.533-88.349,88.349-88.349c48.816,0,88.399,39.583,88.399,88.349
		C354.001,458.429,351.311,470.408,346.544,481.271z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">


                                        <p class="txt-footer1"><a class="txt-footer1" href="tel:1900636648">1900 636 648</a></p>

                                    </div>
                                </div>
                                <!-- .icon-box -->



                                <div class="icon-box featured-box icon-box-left text-left">
                                    <div class="icon-box-img" style="width: 20px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <?xml version="1.0" encoding="iso-8859-1"?>
                                                <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="308.728px" height="308.728px" viewBox="0 0 308.728 308.728" style="enable-background:new 0 0 308.728 308.728;" xml:space="preserve">
<g>
	<g>
		<path d="M153.188,27.208c-37.562,1.134-130,55.057-144.495,63.65l-7.981,32.664l40.236,28.809l-7.733-27.01l189.62-54.288
			l26.895,93.949l58.098-41.331l-10.004-32.698C283.848,82.656,190.877,28.342,153.188,27.208z"/>
		<polygon points="308.728,281.52 308.728,195.199 308.728,160.289 308.728,136.255 306.809,137.621 252.882,175.988 
			222.101,197.888 226.557,202.27 231.942,207.581 237.326,212.886 243.833,219.288 307.02,281.52 		"/>
		<polygon points="0,137.415 0,150.224 0,281.52 1.479,281.52 60.832,221.766 66.667,215.892 72.127,210.391 77.588,204.891 
			85.158,197.271 45.731,169.042 8.147,142.135 0,136.299 		"/>
		<path d="M231.905,222.705l-9.692-9.545l-5.39-5.311l-5.39-5.31l-1.382-1.366l-5.489-5.4l-0.954-0.938
			c-1.599-1.576-3.27-3.053-4.989-4.461c-12.777-10.457-28.655-16.158-45.399-16.158c-16.767,0-32.616,5.69-45.394,16.137
			c-1.938,1.582-3.813,3.265-5.598,5.058l-0.334,0.338l-5.363,5.399l-3.452,3.48l-5.458,5.495l-5.46,5.495l-17.921,18.046
			l-47.276,47.593h274.396L231.905,222.705z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">


                                        <p class="txt-footer1"><a class="txt-footer1" href=""><span class="__cf_email__" data-cfemail="4327262e2c2d2b362d3726312403242e222a2f6d202c2e">menly@gmail.com</span></a><br/>

                                    </div>
                                </div>
                                <!-- .icon-box -->



                                <div class="icon-box featured-box icon-box-left text-left">
                                    <div class="icon-box-img" style="width: 20px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <?xml version="1.0" encoding="iso-8859-1"?>
                                                <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="430.123px" height="430.123px" viewBox="0 0 430.123 430.123" style="enable-background:new 0 0 430.123 430.123;" xml:space="preserve">
<g>
	<path id="Skype" d="M412.164,246.198c1.605-10.155,2.45-20.544,2.45-31.148c0-110.215-89.342-199.555-199.56-199.555
		c-10.576,0-20.995,0.871-31.141,2.458C165.534,6.581,143.842,0,120.595,0C53.996,0,0.005,53.984,0.005,120.59
		c0,23.242,6.585,44.916,17.952,63.332c-1.573,10.172-2.439,20.528-2.439,31.132c0,110.223,89.34,199.536,199.532,199.536
		c10.585,0,21.007-0.816,31.152-2.417c18.398,11.35,40.072,17.949,63.314,17.949c66.617,0,120.602-53.998,120.602-120.602
		C430.123,286.269,423.542,264.6,412.164,246.198z M309.801,305.81c-8.442,12.153-20.843,21.65-37.047,28.479
		c-16.237,6.847-35.428,10.254-57.59,10.254c-26.562,0-48.554-4.648-65.913-14.034c-12.305-6.721-22.313-15.737-30.007-26.98
		c-7.71-11.252-11.619-22.271-11.619-33.015c0-6.338,2.417-11.85,7.122-16.344c4.754-4.527,10.877-6.796,18.104-6.796
		c5.92,0,11.005,1.783,15.145,5.316c4.109,3.532,7.556,8.667,10.375,15.443c3.379,7.85,7.049,14.412,10.954,19.648
		c3.881,5.171,9.343,9.488,16.417,12.867c6.996,3.388,16.307,5.082,27.958,5.082c15.945,0,28.831-3.449,38.693-10.253
		c9.912-6.866,14.673-15.22,14.673-25.314c0-8.051-2.567-14.445-7.831-19.43c-5.312-5.05-12.172-8.896-20.685-11.579
		c-8.546-2.711-20.02-5.586-34.399-8.615c-19.308-4.214-35.456-9.119-48.533-14.752c-13.094-5.654-23.522-13.383-31.251-23.146
		c-7.745-9.859-11.607-22.113-11.607-36.627c0-13.84,4.077-26.217,12.239-36.989c8.158-10.802,19.961-19.07,35.351-24.829
		c15.336-5.757,33.391-8.637,54.075-8.637c16.541,0,30.849,1.914,42.96,5.722c12.078,3.836,22.146,8.898,30.196,15.25
		c7.999,6.338,13.885,13.023,17.613,20.038c3.725,7.036,5.601,13.908,5.601,20.614c0,6.235-2.417,11.89-7.127,16.846
		c-4.709,4.963-10.733,7.493-17.768,7.47c-6.342,0-11.317-1.463-14.767-4.56c-3.36-2.996-6.889-7.766-10.706-14.414
		c-4.825-9.276-10.604-16.503-17.324-21.672c-6.543-5.073-17.338-7.714-32.359-7.682c-13.898,0-25.018,2.84-33.411,8.394
		c-8.445,5.643-12.482,12.19-12.501,19.861c0.014,4.807,1.396,8.86,4.177,12.326c2.824,3.498,6.753,6.529,11.803,9.084
		c5.052,2.595,10.191,4.602,15.355,6.046c5.225,1.481,13.894,3.622,25.944,6.457c15.112,3.257,28.819,6.896,41.136,10.862
		c12.293,3.986,22.784,8.793,31.451,14.52c8.736,5.71,15.564,12.99,20.438,21.783c4.909,8.807,7.354,19.564,7.354,32.222
		C322.509,279.968,318.263,293.676,309.801,305.81z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">


                                        <p class="txt-footer1"><a class="txt-footer1" href="skype:demonhunterp?chat">demonhunterp</a></p>

                                    </div>
                                </div>
                                <!-- .icon-box -->



                            </div>
                        </div>
                        <div class="col medium-3 small-6 large-3">
                            <div class="col-inner">

                                <h3 class="txt-footer">VỀ CHÚNG TÔI</h3>
                                <ul class="sidebar-wrapper ul-reset txt-footer1">
                                    <div class="mona-sidebar-footer">
                                        <div class="menu-menu-ve-chung-toi-container">
                                            <ul id="menu-menu-ve-chung-toi" class="menu">
                                                <li id="menu-item-256" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-256"><a href="vechungtoi.php">Giới thiệu</a></li>
                                                <li id="menu-item-254" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-254"><a href="hethongpp_banle.php">Hệ thống phân phối</a></li>
                                                <li id="menu-item-255" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-255"><a href="tamnhin_cotloi.php">Tầm nhìn – Sứ mệnh – Giá trị cốt lõi</a></li>
                                                <li id="menu-item-257" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-257"><a href="lienhe.php">Liên hệ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>


                            </div>
                        </div>
                        <div class="col medium-3 small-6 large-3">
                            <div class="col-inner">

                                <h3 class="txt-footer">CHÍNH SÁCH</h3>
                                <ul class="sidebar-wrapper ul-reset txt-footer1">
                                    <div class="mona-sidebar-footer">
                                        <div class="menu-menu-ve-chinh-sach-container">
                                            <ul id="menu-menu-ve-chinh-sach" class="menu">
                                                <li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-253"><a href="">Chính sách giao hàng</a></li>
                                                <li id="menu-item-251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a href="">Chính sách bảo mật</a></li>
                                                <li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252"><a href="">Chính sách đổi trả</a></li>
                                                <li id="menu-item-250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-250"><a href="">Điều khoản dịch vụ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>


                            </div>
                        </div>
                        <div class="col medium-6 small-12 large-3">
                            <div class="col-inner">

                                <h3 class="txt-footer">ĐĂNG KÝ</h3>
                                <p class="txt-footer1">Đăng ký để nhận được được thông tin mới nhất từ chúng tôi.</p>
                                <div role="form" class="wpcf7" id="wpcf7-f28-o1" lang="vi" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form action="/hachi/?fbclid=IwAR3BM9HHuy-UhpvrNvCfUQbHRPEJG2xQ0Wlr3lwGlySkkRt-2RSk2GMeOxs#wpcf7-f28-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                        <div style="display: none;">
                                            <input type="hidden" name="_wpcf7" value="28" />
                                            <input type="hidden" name="_wpcf7_version" value="5.1.6" />
                                            <input type="hidden" name="_wpcf7_locale" value="vi" />
                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f28-o1" />
                                            <input type="hidden" name="_wpcf7_container_post" value="0" />
                                        </div>
                                        <div class="form-dangky">
                                            <span class="wpcf7-form-control-wrap email-dang-ky"><input type="email" name="email-dang-ky" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="email-dang-ky" aria-required="true" aria-invalid="false" placeholder="Email ..." /></span><br
                                            />
                                            <label id="btn-gui-icon"><i class="fa fa-paper-plane"></i><input type="submit" value="Gửi" class="wpcf7-form-control wpcf7-submit mona-hiden" /></label>
                                        </div>
                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <style scope="scope">
                        </style>
                    </div>

                </div>
                <!-- .section-content -->


                <style scope="scope">
                    #section_343530008 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                        background-color: rgb(255, 255, 255);
                    }
                </style>
            </section>

            <div class="absolute-footer light medium-text-center text-center">
                <div class="container clearfix">


                    <div class="footer-primary pull-left">
                        <div class="copyright-footer">
                            © Bản quyền thuộc về
                            <công ty khách hàng>. Thiết kế website <img src="./assets/images/images_home/logo_ciel.png" style="width:70px;vertical-align:sub;" alt="Menly"> </div>
                    </div>
                    <!-- .left -->
                </div>
                <!-- .container -->
            </div>
            <!-- .absolute-footer -->
            <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle" id="top-link"><i class="fas fa-chevron-up"></i></a>

        </footer>
        <!-- .footer-wrapper -->

    </div>
    <!-- #wrapper -->

    <!-- Mobile Sidebar -->
    <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
        <div class="sidebar-menu no-scrollbar ">
            <ul class="nav nav-sidebar  nav-vertical nav-uppercase">
                <li class="header-search-form search-form html relative has-icon">
                    <div class="header-search-form-wrapper">
                        <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                            <form role="search" method="get" class="searchform" action="http://mauweb.monamedia.net/hachi/">
                                <div class="flex-row relative">
                                    <div class="flex-col search-form-categories">
                                        <select class="search_categories resize-select mb-0" name="product_cat"><option value="" selected='selected'>All</option><option value="cham-soc-da">Chăm sóc da</option><option value="cham-soc-toc">Chăm sóc tóc</option></select>                                        </div>
                                    <!-- .flex-col -->
                                    <div class="flex-col flex-grow">
                                        <label class="screen-reader-text" for="woocommerce-product-search-field-1">Tìm kiếm:</label>
                                        <input type="search" id="woocommerce-product-search-field-1" class="search-field mb-0" placeholder="Tìm kiếm" value="" name="s" />
                                        <input type="hidden" name="post_type" value="product" />
                                    </div>
                                    <!-- .flex-col -->
                                    <div class="flex-col">
                                        <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0">
				<i class="icon-search" ></i>			</button>
                                    </div>
                                    <!-- .flex-col -->
                                </div>
                                <!-- .flex-row -->
                                <div class="live-search-results text-left z-top"></div>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-34"><a href="" class="nav-top-link"><span class='menu-image-hover-wrapper'><img width="34" height="34" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/hd_mainmenu_icon1.png" class="menu-image menu-image-title-below" alt="" /><img width="34" height="34" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/hd_mainmenu_icon_hover1.png" class="hovered-image menu-image-title-below" alt="" style="margin-left: -34px;" /></span><span class="menu-image-title-below menu-image-title">Trang chủ</span></a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-106"><a href="./header.php?url=sanpham" class="nav-top-link"><span class='menu-image-hover-wrapper'><img width="34" height="34" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/hd_mainmenu_icon_hover123434.png" class="menu-image menu-image-title-below" alt="" /><img width="34" height="34" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/hd_mainmenu_icon_hover222222222222.png" class="hovered-image menu-image-title-below" alt="" style="margin-left: -34px;" /></span><span class="menu-image-title-below menu-image-title">Sản phẩm</span></a>
                    <ul class=children>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-229"><a href="">Chăm sóc tóc</a>
                            <ul class=nav-sidebar-ul>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-232"><a href="">Dầu xả</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-231"><a href="">Dầu gội</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-230"><a href="">Chăm sóc da</a>
                            <ul class=nav-sidebar-ul>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-233"><a href="">Sữa tắm</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-234"><a href="">Nam giới</a>
                            <ul class=nav-sidebar-ul>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-235"><a href="">Chăm sóc tóc cho nam</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-236"><a href="">Tắm và Dưỡng thể cho Nam</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-237"><a href="">Trẻ em</a>
                            <ul class=nav-sidebar-ul>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-238"><a href="">2-in-1 cho Trẻ em</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-239"><a href="">Dầu gội cho Trẻ em</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-207"><a href="" class="nav-top-link"><span class='menu-image-hover-wrapper'><img width="34" height="34" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/hd_mainmenu_icon3.png" class="menu-image menu-image-title-below" alt="" /><img width="34" height="34" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/hd_mainmenu_icon_hover3.png" class="hovered-image menu-image-title-below" alt="" style="margin-left: -34px;" /></span><span class="menu-image-title-below menu-image-title">Về Hachi</span></a>
                    <ul class=children>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-206"><a href="">Về chúng tôi</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-205"><a href="">Tầm nhìn – Sứ mệnh – Giá trị cốt lõi</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a href="">Liên hệ</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-204"><a href="">Hệ thống phân phối và bán lẻ</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-37"><a href="" class="nav-top-link"><span class='menu-image-hover-wrapper'><img width="42" height="34" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/hd_mainmenu_icon4.png" class="menu-image menu-image-title-below" alt="" /><img width="42" height="34" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/hd_mainmenu_icon4.png" class="hovered-image menu-image-title-below" alt="" style="margin-left: -42px;" /></span><span class="menu-image-title-below menu-image-title">Tin tức</span></a>
                    <ul class=children>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-208"><a href="">Khuyến mãi</a></li>
                    </ul>
                </li>
                <li class="account-item has-icon menu-item">
                    <a href="" class="nav-top-link nav-top-not-logged-in">
    <span class="header-account-title">
    Đăng nhập  </span>
</a>
                    <!-- .account-login-link -->

                </li>
                <li class="header-newsletter-item has-icon">

                    <a href="#header-newsletter-signup" class="tooltip" title="Sign up for Newsletter">

    <i class="icon-envelop"></i>
    <span class="header-newsletter-title">
      Newsletter    </span>
  </a>
                    <!-- .newsletter-link -->

                </li>
                <li class="html header-social-icons ml-0">
                    <div class="social-icons follow-icons"><a href="" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip" title="Follow on Facebook"><i class="icon-facebook" ></i></a><a href="" target="_blank" rel="noopener noreferrer nofollow"
                            data-label="Instagram" class="icon plain  instagram tooltip" title="Follow on Instagram"><i class="icon-instagram" ></i></a><a href="" target="_blank" data-label="Twitter" rel="noopener noreferrer nofollow" class="icon plain  twitter tooltip"
                            title="Follow on Twitter"><i class="icon-twitter" ></i></a></div>
                </li>
                <li class="html custom html_topbar_right">
                    <p class="mona-html hotline"><a href="tel:1900636648">1900 636 648</a></p>
                </li>
                <li class="html custom html_top_right_text">
                    <p class="mona-html email"><a href=""><span class="__cf_email__" data-cfemail="5d3032331d3032333c73303839343c">[email&#160;protected]</span></a></p>
                </li>
            </ul>
        </div>
        <!-- inner -->
    </div>
    <!-- #mobile-menu -->
    <div id="login-form-popup" class="lightbox-content mfp-hide">
        <div class="woocommerce-notices-wrapper"></div>
        <div class="account-container lightbox-inner">


            <div class="account-login-inner">

                <h3 class="uppercase">Đăng nhập</h3>

                <form class="woocommerce-form woocommerce-form-login login" method="post">


                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label for="username">Tên tài khoản hoặc địa chỉ email&nbsp;<span class="required">*</span></label>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="" /> </p>
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
                        <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
                    </p>


                    <p class="form-row">
                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
							<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Ghi nhớ mật khẩu</span>
						</label>
                        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="a745c0bc91" /><input type="hidden" name="_wp_http_referer" value="/hachi/?fbclid=IwAR3BM9HHuy-UhpvrNvCfUQbHRPEJG2xQ0Wlr3lwGlySkkRt-2RSk2GMeOxs"
                        /> <button type="submit" class="woocommerce-Button button woocommerce-form-login__submit" name="login" value="Đăng nhập">Đăng nhập</button>
                    </p>
                    <p class="woocommerce-LostPassword lost_password">
                        <a href="">Quên mật khẩu?</a>
                    </p>


                </form>
            </div>
            <!-- .login-inner -->


        </div>
        <!-- .account-login-container -->

    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript">
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "http:\/\/mauweb.monamedia.net\/hachi\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.6'></script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/hachi\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/hachi\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "Xem gi\u1ecf h\u00e0ng",
            "cart_url": "http:\/\/mauweb.monamedia.net\/hachi\/gio-hang\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.9.2'></script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/hachi\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/hachi\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.9.2'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/hachi\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/hachi\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_c80e241a529ce76a4694d6000936fd91",
            "fragment_name": "wc_fragments_c80e241a529ce76a4694d6000936fd91",
            "request_timeout": "5000"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.9.2'></script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search.js?ver=3.10.4'></script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-includes/js/hoverIntent.min.js?ver=1.8.1'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var flatsomeVars = {
            "ajaxurl": "http:\/\/mauweb.monamedia.net\/hachi\/wp-admin\/admin-ajax.php",
            "rtl": "",
            "sticky_height": "96",
            "lightbox": {
                "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
                "close_btn_inside": false
            },
            "user": {
                "can_edit_pages": false
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-content/themes/flatsome/assets/js/flatsome.js?ver=3.10.4'></script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-content/themes/flatsome/assets/js/woocommerce.js?ver=3.10.4'></script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-includes/js/wp-embed.min.js?ver=5.3.4'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var _zxcvbnSettings = {
            "src": "http:\/\/mauweb.monamedia.net\/hachi\/wp-includes\/js\/zxcvbn.min.js"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-includes/js/zxcvbn-async.min.js?ver=1.0'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var pwsL10n = {
            "unknown": "M\u1eadt kh\u1ea9u m\u1ea1nh kh\u00f4ng x\u00e1c \u0111\u1ecbnh",
            "short": "R\u1ea5t y\u1ebfu",
            "bad": "Y\u1ebfu",
            "good": "Trung b\u00ecnh",
            "strong": "M\u1ea1nh",
            "mismatch": "M\u1eadt kh\u1ea9u kh\u00f4ng kh\u1edbp"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-admin/js/password-strength-meter.min.js?ver=5.3.4'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_password_strength_meter_params = {
            "min_password_strength": "3",
            "stop_checkout": "",
            "i18n_password_error": "Vui l\u00f2ng nh\u1eadp m\u1eadt kh\u1ea9u kh\u00f3 h\u01a1n.",
            "i18n_password_hint": "G\u1ee3i \u00fd: M\u1eadt kh\u1ea9u ph\u1ea3i c\u00f3 \u00edt nh\u1ea5t 12 k\u00fd t\u1ef1. \u0110\u1ec3 n\u00e2ng cao \u0111\u1ed9 b\u1ea3o m\u1eadt, s\u1eed d\u1ee5ng ch\u1eef in hoa, in th\u01b0\u1eddng, ch\u1eef s\u1ed1 v\u00e0 c\u00e1c k\u00fd t\u1ef1 \u0111\u1eb7c bi\u1ec7t nh\u01b0 ! \" ? $ % ^ & )."
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='http://mauweb.monamedia.net/hachi/wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js?ver=3.9.2'></script>

                                     </div>
                                
            </body>
            </html>