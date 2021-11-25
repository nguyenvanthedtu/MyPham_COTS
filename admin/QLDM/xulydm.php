<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm danh mục</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link  rel="stylesheet" href="./assets/css/QLDM/themdm.css"/>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container-themdm">
    <h1 class="title">THÊM DANH MỤC</h1>
    <br>
    <form action="" method="post">
       
        <table class="table-themdm">
            <tr>
                <td>Tên danh mục(*) : </td>
                <td><input type="text" name="tendm" class="form-control" required></td>
            </tr>
            <tr>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit-ycdm" value="submit" class="btn btn-primary btn-themdm">Thêm danh mục</button>
                  
                </td>
            </tr>
        </table>
           
    </form>
    </div>
    <?php
        include("../admin/connect.php");
        if(isset($_POST["submit-ycdm"])){
            $tendm = $_POST["tendm"];
            $sql = "insert into danhmuc(TenDM,TrangThai) values ('$tendm','2')";
            mysqli_query($conn,$sql);
            echo "<script>window.location.href='./index.php?url=ycdm&kq=1'</script>";
        }
    ?>
</body>
</html>

