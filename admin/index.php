<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Admin</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/c52f7154f4.js" crossorigin="anonymous"></script>
	  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <link rel="stylesheet" href="./assets/css/index.css"/>
	  <link rel="icon" href="../User/assets/images/images_home/favicon.PNG" sizes="32x32" type="image/png"/>
	<link rel="icon" href="../User/assets/images/images_home/favicon.PNG" sizes="192x192" type="image/png"/>
    </head>
    
    <body>
		<?php session_start(); include './update_Date.php';?>
		<!-- Check thong tin truoc khi login admin -->
		<?php if(isset($_SESSION['admin'])==null&&isset($_SESSION['admin-NCC'])==null)  echo "<script>window.location.href='../DangNhap/dangnhap.php'</script>";?>
		<div id="fade"></div>
		<div class="main">
		<img src="./assets/images/category.png" id="image_nav" class="openbtn">	
			<div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width: 20%;">
				<div class="jquery-accordion-menu-header">    
                    <img src="./assets/images/profile.png" alt="./assets/images/profile.png" width="80" class="mr-3 rounded-circle image-profile">      
                    <p class="name"><?php if(isset($_SESSION['admin'])) echo $_SESSION['admin']; if(isset($_SESSION['admin-NCC'])) echo $_SESSION['admin-NCC']?></p>	
                </div>	
				<ul class="active1">
					<?php if(isset($_SESSION['admin'])) {?>
			
					<li><a href="./index.php?url=QlTK"><i class="far fa-user" id="icon"></i>Quản lý tài khoản</a></li>
					<li><a href="#"><i class="fas fa-list-ul" id="icon"></i>Quản lý danh mục </a>
						<ul class="submenu">
							<li><a href="./index.php?url=duyet">Danh mục chờ duyệt</a></li>
							<li><a href="./index.php?url=qldm">Danh sách danh mục</a></li>
						</ul>
					</li>
					<li><a href="./index.php?url=qlncc"><i class="fas fa-house-user" id="icon"></i>Quản lý nhà cung cấp</a></li>
					<li><a href="./index.php?url="><i class="fas fa-ad" id="icon"></i>Quản lý banner</a></li>
					<li><a href="./index.php?url=DSBĐ"><i class="far fa-window-maximize" id="icon"></i>Quản lý bài đăng</a></li>
					<li><a href="./index.php?url=thongkedt"><i class="far fa-chart-bar" id="icon"></i>Thống kê doanh thu</a></li>
					<?php }?>
					<!-- Nhà cung cấp -->
					<?php if(isset($_SESSION['admin-NCC'])) {?>
					<li><a href="./index.php?url=qlsanpham"><i class="fas fa-tags" id="icon"></i>Quản lý sản phẩm</a>
					<li><a href="#"><i class="fas fa-file-invoice" id="icon"></i>Quản lý hóa đơn</a>
						<ul class="submenu">
							<li><a href="./index.php?url=hdchoduyet">Hóa đơn chờ xét duyệt</a></li>
							<li><a href="./index.php?url=hddanggiao">Hóa đơn đang giao</a></li>
							<!-- <li><a href="#">Design </a>
								<ul class="submenu">
									<li><a href="#">	</a></li>
									<li><a href="#">	 </a></li>
									<li><a href="#">	</a></li>
									<li><a href="#">	</a></li>
								</ul>
							</li> -->
							<li><a href="./index.php?url=hddagiao">Hóa đơn đã giao</a></li>
                            <li><a href="./index.php?url=hddahuy">Hóa đơn đã hủy</a></li>
						</ul>
					</li>
					<li><a href="./index.php?url=khuyenmai"><i class="fas fa-percentage" id="icon"></i>Quản lý khuyến mại</a>
						<!-- <ul class="submenu">
							<li><a href="#">	</a></li>
							<li><a href="#">	</a>
							<li><a href="#">	</a></li>
							<li><a href="#">	</a></li>
						</ul> -->
					</li>
                    <li><a href="./index.php?url=qldg"><i class="far fa-comments" id="icon"></i>Quản lý đánh giá</a></li>
                    <li><a href="./index.php?url=qlkh"><i class="fas fa-user-friends" id="icon"></i>Quản lý khách hàng</a></li>
                    <li><a href="./index.php?url=ycdm"><i class="fas fa-reply" id="icon"></i>Yêu cầu danh mục</a></li>
					<li><a href="./index.php?url=thongke"><i class="far fa-chart-bar" id="icon"></i>Thống kê</a></li> 
					<?php }?>
					<li><a href="./index.php?url=dangxuat"><i class="fas fa-sign-out-alt" id="icon"></i>Đăng xuất</a></li>
				</ul>
				<div class="jquery-accordion-menu-footer">
					
				</div>      <!--Footer-->
			</div>
			
	
            <!-- Content -->
            <div class="content-right">
			
			<?php
			   if(isset($_GET['url'])){
				switch($_GET['url']){
					 // Quan ly hoa don
					 case 'hdchoduyet': include './QLHD/hdchoduyet.php';break;
					 case 'hddanggiao': include './QLHD/hddanggiao.php';break;
					 case 'hddagiao': include './QLHD/hddagiao.php';break;
					 case 'hddahuy': include './QLHD/hddahuy.php';break;
					 case 'cthoadon': include './QLHD/cthoadon.php';break;
					 case 'checkhd': include './QLHD/checkhd.php';break;

					 // Quan ly khuyen mai
					 case 'khuyenmai': include './QLKM/khuyenmai.php';break;
					 case 'themdotkm': include './QLKM/themdotkm.php';break;
					 case 'ctkhuyenmai': include './QLKM/ctkhuyenmai.php';break;
					 case 'themspkm': include './QLKM/themspkm.php';break;
					 case 'suakm': include './QLKM/suakm.php';break;
					 case 'suactkm': include './QLKM/suactkm.php';break;
					 case 'xoakm': include './QLKM/xoakm.php';break;
					 case 'khoakm': include './QLKM/khoakm.php';break;
					 
					 // Quan ly tai khoan
					 case 'QlTK' : include './QLTK/DsTK.php';break;
					 case 'themtk' : include './QLTK/ThemTK.php';break;
					 case 'suatk' : include './QLTK/SuaTK.php';break;
					 case 'suatksb' : include './QLTK/SuaTK_submit.php';break;
					 case 'doimk' : include './QLTK/DoiMK.php';break;
					 case 'xoatk' : include './QLTK/XoaTK_submit.php';break;

					 // Quan ly danh muc
					 case 'qldm' : include './QLDM/DsDM.php';break;
					 case 'duyet' : include './QLDM/duyetdm.php';break;
					 case 'duyetdm' : include './QLDM/duyet.php';break;
					 case 'themdm' : include './QLDM/ThemDM.php';break;
					 case 'suadm' : include './QLDM/SuaDM.php';break;
					 case 'xoadm' : include './QLDM/XoaDM_submit.php';break;
					 
					 
					 //Quan ly san pham
					 case 'qlsanpham' : include './QLSP/qlsanpham.php';break;
					 case 'add' : include './QLSP/add.php';break;
					 case 'view' : include './QLSP/view.php';break;
					 case 'edit' : include './QLSP/edit.php';break;
					 case 'delete' : include './QLSP/delete.php';break;
					//Quan ly khach hang
					 case 'dskh' : include './QLKH/dskh.php';break;
					 //Quan ly danh gia
					 case 'qldg' : include './QLDG/DanhSachDG.php';break;
					 case 'review' : include './QLDG/chon.php';break;
					 case 'confirm' : include './QLDG/duyet_submit.php';break;
					 case 'xoadg' : include './QLDG/xoa.php';break;
					
					 //Quan ly nha cung cap
					 case 'qlncc' : include './QLNCC/dsncc.php';break;
					 case 'ncc' : include './QLNCC/xulyncc.php';break;	 
					 case 'suancc' : include './QLNCC/suancc.php';break;	 

					 //Quan ly nha cung cap
					 case 'qlkh' : include './QLKH/dskh.php';break;
					 
					 //Yêu cầu danh mục
					 case 'ycdm' : include './QLDM/yeucaudm.php';break;
					 case 'xulydm' : include './QLDM/xulydm.php';break;
					 
					 //Thong ke nhà cung cấp
					 case 'thongke' : include './TKE/thongke.php';break;

					 //Thong ke admin
					 case 'thongkedt' : include './TKE_AD/thongke.php';break;

					 case 'dangxuat': include './dangxuat.php';break;

					 //Quan ly bai dang
					 case 'DSBĐ' : include './QLBĐ/DSBĐ.php';break;
					 case 'xemCTBĐ' : include './QLBĐ/xemCTBĐ.php';break;
					 case 'themBĐ' : include './QLBĐ/themBĐ.php';break;
					 case 'xoaBĐ' : include './QLBĐ/xoaBĐ_submit.php';break;
					 case 'suaBĐ' : include './QLBĐ/suaBĐ.php';break;
				}
			}
			?>
			</div>
			</div>
			
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
        <script src="./assets/js/index.js"></script>
		<script src="./assets/js/date.js"></script>
		<?php if(isset($_SESSION['admin']) && isset($_GET['ad']) && $_GET['ad']==1) {?>
			<script>swal("","Xin chào,"+ " <?php if(isset($_SESSION['admin'])) echo $_SESSION['admin'];  ?> chào mừng bạn đến với trang quản trị viên của chúng tôi!","success");</script>
		<?php } ?>	
		<?php if(isset($_SESSION['admin-NCC']) && isset($_GET['ad']) && $_GET['ad']==2) {?>
			<script>swal("","Xin chào,"+ " <?php if(isset($_SESSION['admin-NCC'])) echo $_SESSION['admin-NCC'];  ?> chào mừng bạn đến với trang quản trị viên của chúng tôi!","success");</script>
		<?php } ?>	
    </body>
</html>
