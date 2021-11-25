<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dangky.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Quên mật khẩu</title>
</head>
<body>
    <form method="post" action="../DangNhap/xulydangnhap.php">
    <div class="mail">
<hr>
    <label><b>QUÊN MẬT KHẨU</b></label>
    </br></br>
    <label><b>Nhập địa chỉ email</b></label>
    <input type="text" placeholder="Nhập email" name="emailqmk" id="quenmk" required>
    <p id="error"></p>
    <input name="quenmk" type="submit" value="Xác nhận" class="verify-mail" id="sub-qmk"/>
<hr>
</div>
    </form>
    <script src="../assets/js/dangnhap.js"></script>   
</body>
</html>