<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/QLKM/themdotkm.css"/>
    <title>Thêm đợt khuyến mãi</title>
</head>
<body>
<?php 
    include '../admin/connect.php';
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $fromdate = $_POST['from-date'];
        $todate = $_POST['to-date'];
        $qr = "insert into khuyenmai(TenKM,TuNgay,DenNgay,TrangThai) values('$name','$fromdate','$todate','Chưa khuyến mãi')";
        $result = mysqli_query($conn,$qr);
        echo "<script>window.location.href='./index.php?url=khuyenmai&kq=1&page=1'</script>";
    }
?>
<form method="post" action="#">
  <div class="container">
    <h1 class="title-reg">Thêm đợt khuyến mãi</h1>
    <hr>
    <label><b>Tên khuyến mãi</b></label>
    <input type="text" placeholder="Nhập tên khuyến mãi" name="name" id="name" required>
    <p id="error"></p>
    <label><b>Từ ngày</b></label>
    <input type="date" name="from-date" id="fromdate" min="<?php echo date("Y-m-d"); ?>" value="<?php echo date("Y-m-d"); ?>"  required>

    <label><b>Đến ngày</b></label>
    <input type="date" name="to-date" id="todate"  required>
    
    <hr>
    <button type="submit" class="addbtn" name="add" id="addbtn">Thêm đợt khuyến mãi</button>
    <button class="addbtn" onclick="back()">Quay về</button>
  </div>
</form>
<script>
  function back() {
    window.location.href="./index.php?url=khuyenmai";
  }
</script>
<script src="./assets/js/ajax.js"></script>
</body>
</html>