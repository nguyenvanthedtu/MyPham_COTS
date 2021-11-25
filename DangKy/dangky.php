<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dangky.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <link rel="icon" href="../User/assets/images/images_home/favicon.PNG" sizes="32x32" type="image/png"/>
	  <link rel="icon" href="../User/assets/images/images_home/favicon.PNG" sizes="192x192" type="image/png"/>
    <title>Đăng ký</title>
</head>
<body>
<?php session_start(); ?>
<form method="post" action="./xulydangky.php">
  <div class="container">
    <h1 class="title-reg">Đăng ký</h1>
    <hr>
    <label><b>Email</b><b style="color:red;"> (*)</b></label>
    <input type="email" placeholder="Nhập Email" name="email" id="email" required>
    <label><b id="error" style="color:red"></b></label><br/><br />
    <label><b>Mật khẩu</b><b style="color:red;"> (*)</b></label>
    <input type="password" placeholder="Nhập mật khẩu" name="password" id="psw" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">

    <label><b>Xác nhận mật khẩu</b><b style="color:red;"> (*)</b></label>
    <input type="password" placeholder="Xác nhận mật khẩu" name="password-repeat" id="psw-repeat" required>
    
    <label><b>Họ tên</b><b style="color:red;"> (*)</b></label>
    <input type="text" placeholder="Họ tên" name="name" required>
    </br></br>
    <label><b>Giới tính</b></label>
    <select name="gender" class="gender">
        <option value="1">Nam</>
        <option value="0">Nữ</>
    </select>
    </br></br></br>
    <label><b>Số điện thoại</b><b style="color:red;"> (*)</b></label>
    <input type="text" placeholder="Số điện thoại" name="phone" required>

    <label><b>Địa chỉ</b><b style="color:red;"> (*)</b></label>
    <input type="text" placeholder="Địa chỉ" name="address" required>

    <input type="radio" value="US" name="type-user" id="user" checked="checked">
    <label for="user" style="padding-right:50px"><b>Người dùng</b></label>
    <input type="radio" value="NCC" name="type-user" id="sup">
    <label for="sup"><b>Nhà cung cấp</b></label>
    <hr>
    <button type="submit" class="registerbtn" name="register">Đăng ký</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="../DangNhap/dangnhap.php">Đăng nhập</a>.</p>
  </div>
</form>
   <!-- Thong bao  -->
<?php if(isset($_GET['kq'])&&$_GET['kq']==0) {?>
  <script>swal("","Email này đã tồn tại","error")</script><?php } ?>     
  <script src="../assets/js/dangky.js"></script>       
</body>
</html>