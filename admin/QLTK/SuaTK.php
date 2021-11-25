<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa tài khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/QLTK/suatk.css"/>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container-suatk">
    <h1 class="title1">CẬP NHẬT TÀI KHOẢN</h1>
    <br>
    <h2 class="title1">THÔNG TIN TÀI KHOẢN</h2>
    <form action="./index.php?url=suatksb" method="post" class="form_suatk">
    <?php include("SuaTK_submit.php"); ?>
        <table>
            <tr>
                <td>Tên đăng nhập : </td>
                <td><input type="text" name="tendangnhap" value="<?php echo $tendangnhap; ?>" class="form-control" readonly style="cursor:not-allowed"></td>          
            </tr>
            <tr>
                <td>Email(*) : </td>
                <td><input type="text" name="email" value="<?php echo $email;?>" class="form-control" readonly style="cursor:not-allowed"></td>  
                <td><div class="error"><?php echo $errors['email']; ?></div></td>
            </tr>
        </table>
                <h2 class="title">THÔNG TIN CÁ NHÂN</h2> 
        <table> 
            <tr>
                <td>Họ tên : </td>
                <td><input type="text" name="hoten" value="<?php echo $hoten;?>" class="form-control"></td>
            </tr>
            <tr>
                <td>Giới tính : </td>
                <td>
                    <select class="form-select" name="sex" >
                        <option value="1" <?php if($sex==1) echo "selected=\"selected\""; ?>>Nam</option>
                        <option value="0" <?php if($sex==0) echo "selected=\"selected\""; ?>>Nữ</option>
                        <div></div>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Số điện thoại : </td>
                <td><input type="number" name="sodienthoai" value="<?php echo $sodienthoai;?>" class="form-control"></td>
                <td><div class="error"><?php echo $errors['sodienthoai']; ?></div></td>
            </tr>
            <tr>
                <td>Địa chỉ : </td>
                <td><input type="text" name="diachi" value="<?php echo $diachi;?>" class="form-control"></td>
            </tr>
            <tr>
                <td>Mã loại : </td>
                <td>
                    <select class="form-select" name="maloai" >
                        <option value="AD" <?php if($maloai==1) echo "selected=\"selected\""; ?>>Admin</option>
                        <option value="US" <?php if($maloai==2) echo "selected=\"selected\""; ?>>User</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Trạng thái : </td>
                <td>
                    <select class="form-select" name="trangthai" >
                        <option value="1" <?php if($trangthai==1) echo "selected=\"selected\""; ?>>Mở</option>
                        <option value="0" <?php if($trangthai==0) echo "selected=\"selected\""; ?>>Khóa</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-suatk" onclick="return suaTK('<?php echo $tendangnhap;?>')">Cập nhật</button>
                    <a href="./index.php?url=QlTK" class="btn btn-primary btn-suatk">Quay về</a> 
                </td>
            </tr>
        </table>
    </form>
    </div> 
</body>
</html>
<script>
    function suaTK(name){
        return confirm("Bạn có muốn cập nhật tài khoản : "+ name +" ?");
    }
</script>

