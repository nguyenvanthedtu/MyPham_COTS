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
    <link rel="stylesheet" href="./assets/css/user.css">
   
   
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
    rel="stylesheet"
    />
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <a href="./user.php" class="nav-top-link nav-top-not-logged-in is-small"><span style="padding-right: 10px;">Xin chào, <?php  $user=$_SESSION["user"]; $qr="select * from taikhoan where TenDangNhap='$user'";$result=mysqli_query($conn,$qr);while ($row = mysqli_fetch_array($result)) echo $row['HoTen'];?></span></a>         
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
		
                                    <i class="fas fa-bars"></i>
		  		</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Left Elements -->
                        <div class="flex-col hide-for-medium flex-left
            flex-grow">
                            <ul class="header-nav header-nav-main nav nav-left  nav-uppercase">
                            <li id="menu-item-207" class="has-icon-left menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-207 has-dropdown"><a href="./home.php" class="nav-top-link"><span class='menu-image-hover-wrapper'><i class="fas fa-home" id="icon-icon"></i></span><span class="menu-image-title-below menu-image-title">Trang Chủ</span><i class="icon-angle-down" ></i></a>
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

                                <a href="./list_cart.php" title="Giỏ hàng" class="header-cart-link is-small">


<span class="header-cart-title">
   Giỏ hàng     </span>

   <span class="image-icon header-cart-icon" data-icon-label="<?php if(isset($_SESSION['cart']) && $_SESSION['cart']!=null ){ echo count($_SESSION['cart']);}?>">
    <img class="cart-img-icon" alt="Giỏ hàng" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/hd_mainmenu_icon_cart.png"/>
  </span><!-- .cart-img-inner -->
</a>

                                    <!-- <ul class="nav-dropdown nav-dropdown-simple">
                                        <li class="html widget_shopping_cart">
                                            <div class="widget_shopping_cart_content">


                                                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                    <li class="woocommerce-mini-cart-item mini_cart_item">
                                                        <a href="" class="remove remove_from_cart_button" aria-label="Xóa sản phẩm này" data-product_id="284" data-cart_item_key="04374b674c70129a2da21f12d0dd0276"
                                                            data-product_sku="">&times;</a> <a href="">
							<img width="300" height="300" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-300x300.png 300w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-150x150.png 150w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-768x768.png 768w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-24x24.png 24w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-36x36.png 36w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-48x48.png 48w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-50x50.png 50w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-600x600.png 600w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-100x100.png 100w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master.png 900w" sizes="(max-width: 300px) 100vw, 300px" />DẦU GỘI HACHI VIETNAM CASCADE 500G (SHAMPOO) - XANH NGỌC						</a>
                                                        <dl class="variation">
                                                            <dt class="variation-Dungtch">Dung tích:</dt>
                                                            <dd class="variation-Dungtch">
                                                                <p>350ml</p>
                                                            </dd>
                                                        </dl>
                                                        <span class="quantity">6 &times; <span class="woocommerce-Price-amount amount">170,000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                        </span>
                                                    </li>
                                                </ul>

                                                <p class="woocommerce-mini-cart__total total">
                                                    <strong>Tạm tính:</strong> <span class="woocommerce-Price-amount amount">1,020,000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                </p>


                                                <p class="woocommerce-mini-cart__buttons buttons"><a href="" class="button wc-forward">Xem giỏ hàng</a><a href="" class="button checkout wc-forward">Thanh toán</a></p>



                                            </div>
                                        </li>
                                    </ul>
                                    

                                </li>
                            </ul> -->
                        </div>

                        <!-- Mobile Right Elements -->
                        <!-- <div class="flex-col show-for-medium flex-right">
                            <ul class="mobile-nav nav nav-right ">
                                <li class="cart-item has-icon">

                                    <a href="" class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">
  
  <span class="image-icon header-cart-icon" data-icon-label="6">
    <img class="cart-img-icon" alt="Giỏ hàng" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/hd_mainmenu_icon_cart.png"/>
  </span>
</a>


                                    
                                    <div id="cart-popup" class="mfp-hide widget_shopping_cart">
                                        <div class="cart-popup-inner inner-padding">
                                            <div class="cart-popup-title text-center">
                                                <h4 class="uppercase">Giỏ hàng</h4>
                                                <div class="is-divider"></div>
                                            </div>
                                            <div class="widget_shopping_cart_content">


                                                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                    <li class="woocommerce-mini-cart-item mini_cart_item">
                                                        <a href="" class="remove remove_from_cart_button" aria-label="Xóa sản phẩm này" data-product_id="284" data-cart_item_key="04374b674c70129a2da21f12d0dd0276"
                                                            data-product_sku="">&times;</a> <a href="">
							<img width="300" height="300" src="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-300x300.png 300w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-150x150.png 150w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-768x768.png 768w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-24x24.png 24w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-36x36.png 36w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-48x48.png 48w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-50x50.png 50w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-600x600.png 600w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master-100x100.png 100w, http://mauweb.monamedia.net/hachi/wp-content/uploads/2020/05/AnyConv.com__cascade_goi-front_3dab04d198d64f5fbd1b821b6fc8e085_master.png 900w" sizes="(max-width: 300px) 100vw, 300px" />DẦU GỘI HACHI VIETNAM CASCADE 500G (SHAMPOO) - XANH NGỌC						</a>
                                                        <dl class="variation">
                                                            <dt class="variation-Dungtch">Dung tích:</dt>
                                                            <dd class="variation-Dungtch">
                                                                <p>350ml</p>
                                                            </dd>
                                                        </dl>
                                                        <span class="quantity">6 &times; <span class="woocommerce-Price-amount amount">170,000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                        </span>
                                                    </li>
                                                </ul>

                                                <p class="woocommerce-mini-cart__total total">
                                                    <strong>Tạm tính:</strong> <span class="woocommerce-Price-amount amount">1,020,000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                </p>


                                                <p class="woocommerce-mini-cart__buttons buttons"><a href="" class="button wc-forward">Xem giỏ hàng</a><a href="" class="button checkout wc-forward">Thanh toán</a></p>



                                            </div>
                                            <div class="cart-sidebar-content relative"></div>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </div> -->

                    </div>
                    <!-- .header-inner -->

                    <!-- Header divider -->
                    <div class="container">
                        <div class="top-divider full-width"></div>
                    </div>
                </div>
                <!-- .header-main -->
                <div class="header-bg-container fill">
                    <div class="header-bg-image fill"></div>
                    <div class="header-bg-color fill"></div>
                </div>
                <!-- .header-bg-container -->
            </div>
            <!-- header-wrapper-->
        </header>
