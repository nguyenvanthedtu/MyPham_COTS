
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="./assets/css/QLDG/cssQLDG.css" rel="stylesheet" />
    </head>
    <body>
        <div class="content-comment">
      <h1 class="title">QUẢN LÝ ĐÁNH GIÁ</h1>
    <div class="danhgia"  >
        <div class="danhgia_content-view"  >
            <form action="<?php include("chon_submit.php"); ?>" method="post"  enctype="multipart/form-data">  
            <table class="table-comment">
                <tr>
                    <td> <p>Tên</p> </td>
                    <td> <input  type="text" name="TenDangNhap" class="form-control" readonly="true" value="<?php echo $row['TenDangNhap'];?>" ></td>
                    <td> <p>Mã sản phẩm</p> </td>
                    <td> <input type="text" name="prd_name" class="form-control" readonly="true" value="<?php echo $row['MaSP'];?>" ></td>
                </tr>
                <tr>
                    <td> <p>Số sao</p> </td>
                    <td> <input type="text" name="prd_name"  class="form-control" readonly="true" value="<?php echo $row['SoSao'];?>"> </td>
                    <td> <p>Ngày đánh giá</p> </td>
                    <td> <input type="text" name="prd_name" class="form-control" readonly="true" value="<?php echo $row['NgayDG'];?>"> </td>
                </tr>
                <tr>
                    <td> <p>Nội dung</p> </td>
                   <td> <textarea cols="20" rows="2" readonly="true" class="form-control" height="100px" style="height:100px; width: 350px;"name="message" value="" ><?php echo $row['NoiDung'];?></textarea> </td>
                </tr>
                
            </table>
        </div>
        <a href="./index.php?url=qldg" class="btn btn-success btn-qldg">Quay về</a>
        </div>
        </div>
         </form> 
        </div>
        <br>
      
        </div>
       
    </body>
</html>
