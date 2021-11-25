
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <title>Document</title>
    <link  rel="stylesheet" href="./assets/css/QLBĐ/suaBĐ.css"/>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <h1 class="title">CẬP NHẬT BÀI ĐĂNG</h1>
    <form action="<?php include("suaBĐ_submit.php"); ?>" method="post" class="form_suaBĐ">
        <table >
            <tr>
                <td>Tiêu đề :</td>
                <td>
                    <input type="text" name="tieude" value="<?php echo $tieude?>" class="form-control" required>
                </td>
                <td>
                    <div class="error"><?php echo $errors['tieude']; ?></div>
                </td>
            </tr>
            <tr>
                <td>Chuyên mục :</td>
                <td>
                    <input type="text" name="chuyenmuc" value="<?php echo $chuyenmuc?>" class="form-control" required>
                </td>
                <td>
                    <div class="error"><?php echo $errors['chuyenmuc']; ?></div>
                </td>
            </tr>
            <tr>
                <td>Ngày đăng :</td>
                <td>
                    <input type="date" name="ngaydang" value="<?php echo $ngaydang?>" class="form-control" required>
                </td>
            </tr>
            <tr>
                <td>Hình ảnh :</td>
                <td>
                    <input type="file" name="hinhanh" value="<?php echo $hinhanh?>" class="form-control" required>
                </td>
            </tr>
            <tr>
                <td>Nội dung :</td>
                <td>
                <textarea name="noidung" cols="30" rows="10" value="<?php echo $noidung?>" class="form-control" required><?php echo $noidung?></textarea>
                </td>
                <td>
                    <div class="error"><?php echo $errors['noidung']; ?></div>
                </td>
            </tr>
            <tr>
                <td>Trạng thái :</td>
                <td>
                <select class="form-select" name="trangthai">
                        <option value="1" <?php if($trangthai==1) echo "selected=\"selected\""; ?>>Mở</option>
                        <option value="0" <?php if($trangthai==0) echo "selected=\"selected\""; ?>>Khóa</option>
                    </select>
                </td>
            </tr>
            <td colspan="2">
                    <button type="submit" name="submit" class="btn btn-primary btn-suaBĐ" onclick="return Edit('<?php echo $tieude ;?>') ">Cập nhật bài đăng</button>
                    <button type="button" onclick="goBack()" class="btn btn-primary btn-suaBĐ">Quay về</button>
            </td>
        </table>
    </form>
    
</body>
</html>
<script>
    function Edit(name){
        return confirm("Bạn có muốn cập nhật bài đăng có tiêu đề: " + name + " ?");
    }
    function goBack(){
      window.location.href="./index.php?url=DSBĐ"
}
</script>