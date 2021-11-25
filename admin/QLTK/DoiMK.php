<?php include("DoiMK_submit.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link  rel="stylesheet" href="./assets/css/QLTK/doimk.css"/>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container-doimk">
    <h1 class="title">CẬP NHẬT TÀI KHOẢN</h1>
    <br>
    <h2 class="title">THÔNG TIN TÀI KHOẢN</h2>
    <form action="" method="post" class="form_doimk">
        <table>
            <tr>
                <td>Tên đăng nhập : </td>
                <td><input type="text" name="tendangnhap" value="<?php echo $tendangnhap ?>" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Mật khẩu cũ(*) : </td>
                <td><input type="password" name="matkhaucu" value="<?php echo $matkhaucu ?>" class="form-control"></td>
                <td><div class="error"><?php echo $errors['matkhaucu']; ?></div></td>
            </tr>
            <tr>
                <td>Mật khẩu mới(*) : </td>
                <td><input type="password" name="matkhaumoi" value="<?php echo $matkhaumoi ?>" class="form-control"></td>
                <td><div class="error"><?php echo $errors['matkhaumoi']; ?></div></td>
            </tr>
            <tr>
                <td>Nhập lại mật khẩu mới(*) : </td>
                <td><input type="password" name="rematkhaumoi" value="<?php echo $rematkhaumoi ?>" class="form-control"></td>
                <td><div class="error"><?php echo $errors['rematkhaumoi']; ?></div></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-doimk" onclick="return doiMK('<?php echo $tendangnhap ?>')">Cập nhật</button>
                    <a href="./index.php?url=QlTK" class="btn btn-primary btn-doimk">Quay về</a> 
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>

<script>
    function doiMK(name){
        return confirm("Bạn có muốn cập nhật tài khoản : "+ name +" ?");
    }
</script>

<?php if(isset($_GET['kq'])&&$_GET['kq']==1) {?>
        <script>swal("","Đổi mật khẩu thành công","success")</script>
<?php } ?>
