<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa danh mục</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link  rel="stylesheet" href="./assets/css/QLDM/suadm.css"/>

    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container-suadm">
    <h1 class="title">SỬA DANH MỤC</h1>
    <br>
    <form action="<?php include("SuaDM_submit.php"); ?>" method="post">
        
        <table>
            <tr>
                <td>Mã danh mục : </td>
                <td><input type="text" name="madm" value="<?php echo $madm?>" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Tên danh mục(*) : </td>
                <td><input type="text" name="tendm" value="<?php echo $tendm?>" class="form-control" id="name"></td>
                <td><div class="error"><?php echo $errors['tendm']; ?></div></td>
            </tr>
            <tr>
                <td>Trạng thái : </td>
                <td>
                    <select class="form-select" name="trangthai" >
                        <option value="1" <?php if($trangthai==1) echo "selected=\"selected\""; ?>>Hiển thị</option>
                        <option value="0" <?php if($trangthai==0) echo "selected=\"selected\""; ?>>Ẩn</option>
                    </select>
                </td>
            </tr>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-suadm" onclick="return suaDM('<?php echo $tendm?>')" id="btn_suadm">Cập nhật</button>
                    <a href="./index.php?url=qldm" class="btn btn-primary btn-suadm">Quay về</a>
                </td>
            </tr>
        </table>           
    </form>
    </div>
</body>
</html>
<?php if(isset($old1)&&$old1>0){
               echo "<script>window.location.href='./index.php?url=qldm&kq=2'</script>";
                
            }   ?>
<script>
    function suaDM(name){
        return confirm("Bạn có muốn cập nhật danh mục : "+ name +" ?");
    }
</script>
<script src="./assets/js/ajax.js"></script>

