<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../assets/css/dangnhap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="https://kit.fontawesome.com/c52f7154f4.js" crossorigin="anonymous"></script>
    
    <link rel="icon" href="../User/assets/images/images_home/favicon.PNG" sizes="32x32" type="image/png"/>
	<link rel="icon" href="../User/assets/images/images_home/favicon.PNG" sizes="192x192" type="image/png"/>
</head>
<body>
    <?php session_start(); include '../admin/connect.php';include '../DangNhap/taocaptcha.php'?>
    
<form method="post" action="../DangNhap/xulydangnhap.php" style="display: flex;">
<div class="image-login">
        <img src="https://cf.shopee.vn/file/0d07d78f3e073e41957b80f1ec19cca3">
    </div>
<div class="login">
  <div class="login-header">
    <h1>Đăng nhập</h1>
  </div>
  <div class="login-form">
    <h3>Tài khoản:</h3>
    <input name="username" type="text" placeholder="Tài khoản" required /><br>
    <h3>Mật khẩu:</h3>
    <input name="password" type="password" placeholder="Mật khẩu" required />
    <br>
    <h3>Mã xác nhận:</h3>
    <input name="code" type="text" placeholder="Mã xác nhận" required style="width: 45%;margin-left: -145px;"/>
    <div class="captcha">
    <img src="../assets/images/cpt_bgr.jpg" alt="Captcha" class="img-captcha">
    <h2 class="details-captcha"><?php if(isset($_SESSION['captcha'])) echo $_SESSION['captcha']; ?></h2>
     </div>
    <input name="login" type="submit" value="Đăng nhập" class="login-button" style="transform: translateY(-80px);"/>
    <br>
    <div style="transform: translateY(-30px);">
    <a href="../DangKy/dangky.php" class="sign-up">Đăng ký!</a>
    <br><br>
    <a href="../DangNhap/quenmk.php" class="no-access">Quên mật khẩu!</a>
  </div>
</div>
</form> 
<?php if(isset($_GET['kq'])&&$_GET['kq']==-2){ ?>
<script>swal("","Tài khoản của bạn đã bị khóa","error")</script><?php } ?>
<?php if(isset($_GET['kq'])&&$_GET['kq']==-1){ ?>
<script>swal("","Vui lòng kiểm tra lại thông tin","error")</script><?php } ?>
<?php if(isset($_GET['kq'])&&$_GET['kq']==0){ ?>
<script>swal("","Tài khoản không tồn tại","error")</script><?php } ?>
<?php if(isset($_GET['m'])&&$_GET['m']==99){ ?>
<script>swal("","Mật khẩu mới đã gửi về email của bạn!","success")</script><?php } ?>
<!-- Thong bao dang ky thanh cong va xoa bien tam -->
<?php if(isset($_GET['kq'])&&$_GET['kq']==1){ ?>
<script>swal("","Đăng ký thành công","success")</script><?php unset($_SESSION['username-reg'],$_SESSION['password-reg'],$_SESSION['name-reg'],$_SESSION['gender-reg'],$_SESSION['phone-reg'],$_SESSION['add-reg']); } ?>
<script src="../assets/js/dangky.js"></script>
</body>
</html>