<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/QLBĐ/xemCTBĐ.css"/>
</head>
<body>
    <h1 align="center">THÔNG TIN CHI TIẾT BÀI ĐĂNG</h1>
    <?php 
        if(isset($_GET["id"])){
            $id =$_GET["id"];
            $sql = "Select *from baidang where IdBai = '$id'";
            $old = mysqli_query($conn,$sql);
            $row = mysqli_fetch_row($old);
    ?>
        <div class="CTBĐ">
            <table>
                <tr>
                    <td>Tiêu đề : </td>
                    <td><?php echo $row[1]?></td>
                </tr>
                <tr>
                    <td>Chuyên mục : </td>
                    <td><?php echo $row[2]?></td>
                </tr>
                <tr>
                    <td>Ngày đăng : </td>
                    <td><?php echo $row[3]; ?></td>
                </tr>
                <tr>
                    <td>Hình ảnh : </td>
                    <td><img style="background-image: none;" class="image" src="./assets/images/images_baidang/<?php echo $row[4] ?>"></td>
                </tr>
                <tr>
                    <td>Nội dung : </td>
                    <td><?php echo $row[5]?></td>
                </tr>
                <tr>
                    <td>Trạng thái : </td>
                    <td><?php echo ($row[6] == 1) ? "Mở" : "Khóa"?></td>
                </tr>
                <tr>
                    <td>Người đăng : </td>
                    <td><?php echo $row[7]?></td>
                </tr>
                <tr>
                    <td colspan="7" align="center">
                        <a type="button" href="./index.php?url=DSBĐ">Quay về</a>
                    </td>
                </tr>
            </table>

        </div>
    <?php }?>
</body>
</html>