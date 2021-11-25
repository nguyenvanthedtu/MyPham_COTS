<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/TKE/thongke.css"/>
    <title>Thống kê</title>
</head>
<body>
    <?php include './connect.php';
    //Xu ly Pagination
    $sql = "SELECT * FROM nhacungcap";
    $kq = mysqli_query($conn,$sql);
    $num_rows = mysqli_num_rows($kq); //So rows trong database
    $rows = 5;  //So rows muon hien thi
    if(isset($_GET['page'])&&$_GET['page']>0){
      $page = ($_GET['page']-1)*$rows;  //Vi tri record 
    }
    else {$page = 1;echo "<script>window.location.href='./index.php?url=thongkedt&page=1'</script>"; }
    
    $qr = "SELECT * FROM nhacungcap limit $page,$rows";
    $result = mysqli_query($conn, $qr);
    ?>
    <h1 class="title">THỐNG KÊ</h1>
     <!-- Loc hoa don -->
    <div class="filter">
    <form method="post" action="<?php include("loc.php"); ?>">
            <table class="table-date">
                <tr>
                    <td> Từ ngày </td>
                    <td> <input type="date"  name="fromdate" id="fromdate"> </td>
                    <td> Đến ngày </td>
                    <td> <input  type="date" name="todate" id="todate"> </td>          
                 </tr>
            </table>         
        <br>
        <div class="button-filter">           
            <button  type="submit" name="filter" class="btn-filter">Lọc</button>
            <button  class="btn-filter" type="button" onclick="window.location.href='./index.php?url=thongkedt'">Huỷ lọc</button>          
         </div>
           </form>
    </div>
<!-- ------------------------------------------------------- -->

<table class="table table-bordered table-hover table-1">
  <thead class="table-success">
    <tr>
      <th scope="col" class="title-table" style="width: 7%">Mã NCC</th>
      <th scope="col" class="title-table" style="width: 15%">Tên nhà cung cấp</th>
      <th scope="col" class="title-table" style="width: 10%">Doanh thu</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if(mysqli_num_rows($result)>0){           
      while($row = mysqli_fetch_array($result)) { 
          $doanhthu=0;  
          $mancc = $row['MaNCC']; 
          include("xuly.php");
        if(mysqli_num_rows($result1)>0){           
            while($row1 = mysqli_fetch_array($result1)) { 
                $MaHD = $row1['MaHD'];
                include("thanhtien.php");
                $total=0;
                 if(mysqli_num_rows($result2)>0){
                    $tongtien = 0;
                    
                     while($row2 = mysqli_fetch_array($result2)) {
                 
                 $tongtien +=  $row2['SoLuongMua']*$row2['GiaGoc']-($row2['SoLuongMua']*$row2['GiaGoc']*$row2['TyLeKM'])/100;
                }
                $total += $tongtien;  
              }
            }
            $doanhthu += $total;
          }
    ?>
    <tr>
      <td><?php echo $row['MaNCC'];?></td>
      <td style="word-wrap:break-word"><?php echo $row['TenNCC'];?></td>
      <td> <?php echo number_format($doanhthu,"0",",",".")." VNĐ"; ?> </td> 
    </tr>
    <?php }}?>
  </tbody>
</table>

<?php if(ceil($num_rows / $rows)>1){?>
<nav aria-label="Page navigation example" style="margin-left:50%;">
  <ul class="pagination">
    <?php if(isset($_GET['page'])&& $_GET['page']>1){ ?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=thongkedt&page=<?php if(isset($_GET['page'])) echo $_GET['page']-1 ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php } ?>
    <?php $num_pages = ceil($num_rows / $rows);   //So pagination
          for($i=1;$i<=$num_pages;$i++) { 
    ?>
    <li class="page-item"><a class="page-link" href="./index.php?url=thongkedt&page=<?php echo $i ?>"><?php echo $i; ?></a></li>
    <?php } if(isset($_GET['page'])&& $_GET['page']!=$num_pages){?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=thongkedt&page=<?php if(isset($_GET['page'])) echo $_GET['page']+1 ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>
<?php } ?>


</body>
</html>