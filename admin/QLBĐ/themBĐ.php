
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="./assets/css/QLBĐ/themBĐ.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <h1 class="title">THÊM BÀI ĐĂNG</h1>
    <form action="<?php include("themBĐ_submit.php"); ?>" method="post" class="form_themBĐ">
        <table class="">
            <tr>
                <td>Tiêu đề(*) :</td>
                <td>
                    <input type="text" name="tieude" value="<?php echo $tieude?>" class="form-control input-BĐ" required>
                </td>
                <td>
                    <div class="error"><?php echo $errors['tieude']; ?></div>
                </td> 
            </tr>
            <tr>
                <td>Chuyên mục(*) :</td>
                <td>
                    <input type="text" name="chuyenmuc" value="<?php echo $chuyenmuc?>" class="form-control input-BĐ" required>
                </td>
                <td>
                    <div class="error"><?php echo $errors['chuyenmuc']; ?></div>
                </td>
            </tr>
            <tr>
                <td>Ngày đăng :</td>
                <td>
                    <input type="date" name="ngaydang" value="<?php echo $ngaydang?>" class="form-control input-BĐ" required>
                </td>
            </tr>
            <tr>
                <td>Hình ảnh :</td>
                <td>
                    <input type="file" name="hinhanh" value="<?php echo $hinhanh?>" class="form-control input-BĐ" required>
                </td>
            </tr>
            <tr>
                <td>Nội dung(*) :</td>
                <td>
                    <textarea name="noidung" id="" cols="30" rows="10" value="<?php echo $noidung?>" class="form-control input-BĐ" required></textarea>
                </td>
                <td>
                    <div class="error"><?php echo $errors['noidung']; ?></div>
                </td>
            </tr>
            <tr>
                <td>Trạng thái :</td>
                <td>
                <select class="form-select input-BĐ" name="trangthai" >
                        <option value="1">Mở</option>
                        <option value="0">Khóa</option>
                    </select>
                </td>
            </tr>
            <td colspan="2">
                    <button type="submit" name="submit" class="btn btn-primary btn-themBĐ">Thêm bài đăng</button>
                    <button type="button" onclick="goBack()" class="btn btn-primary btn-themBĐ">Quay về</button>
            </td>
        </table>
    </form>
    <?php if(isset($old1)&&$old1>0){echo "<script>window.location.href='./index.php?url=DSBĐ&kq=1&page=1'</script>";} ?>
</body>
</html>
<script>
    function goBack(){
      window.location.href="./index.php?url=DSBĐ"
}
</script>