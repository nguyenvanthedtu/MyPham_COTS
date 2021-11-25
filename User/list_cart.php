
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="./assets/css/list_cart.css">
<?php
    include './head.php';
    $tongtien=0;
    if(isset($_SESSION['cart']) && $_SESSION['cart']!=null )
    {
        echo "<form action='Updatecart.php' method='post'>";
        echo "<tr align='center'><h2 align='center' id='title'> THÔNG TIN GIỎ HÀNG</h2> </tr>";
        echo "<div style='display:flex'><div style='width: 60%;border-right: 1px solid;'><table class='table_cart'>"; 
        echo "<tr id='title_table'>";
        echo "<td>Mã SP</td>";
        echo "<td>Tên sản phẩm</td>";
        echo "<td>Đơn giá</td>";
        echo "<td>Số lượng</td>";
        echo "<td>Tỷ lệ KM</td>";
        echo "<td>Thành tiền</td>";
        echo "</tr>";
        foreach ($_SESSION['cart'] as $list) {         
        echo "<tr>";
        echo "<td>".$list['id']."</td>";
        echo "<td>".$list['name']."</td>";        
        $gia=number_format($list['price'],'0',',','.')."&#8363;";
        echo "<td>".$gia."</td>"; 
            $MaSP = $list["id"];
            $qr = "SELECT SoLuongTon from sanpham where MaSP='$MaSP'";
            $result = mysqli_query($conn,$qr);
            $row = mysqli_fetch_array($result);
            if($row['SoLuongTon']>0){      
        echo "<td><input type='number' min='1' max='".$row['SoLuongTon']."' id='quantity' name='soluong[".$list['id']."]' value='".$list['sl']."'></td>";}
        echo "<td>".$list['tylekm']." &percnt;"."</td>";     
        $thanhtien=$list['price']*$list['sl']-($list['price']*$list['tylekm']/100);
        $tongtien=$tongtien+$thanhtien;
        $thanhtien=number_format($thanhtien,'0',',','.')."&#8363;";       
        echo "<td>".$thanhtien."</td>";
        echo "<td><input type='submit' id='".$list['id']."' value='Xóa' class='delete'></input></td>";
        echo "</tr>";
        } 
         $tt=number_format($tongtien,'0',',','.')."&#8363;";
        echo "</table><div class='button_cart'>
            <a class='button-continue-shopping button primary is-outline' href='./header.php?url=sanpham'>
		←&nbsp;Tiếp tục xem sản phẩm	</a>
            <p align='left'><input type='submit' name='btnUpdate'  id='update_cart' value='Cập nhật'></p> 
            </div>
            ";
        echo "</form></div>
        <div class='cart_totals'>
	          <table cellspacing='0'>
          <thead>
              <tr>
                  <th class='product-name' colspan='2' style='border-bottom: 2px solid #d8cfcf;'>Cộng giỏ hàng</th>
              </tr>
          </thead>
          </table>
	<table cellspacing='0' class='shop_table shop_table_responsive'>
		<tbody><tr class='cart-subtotal'>
			<th>Tạm tính</th>
			<td data-title='Tạm tính' class='subtotal'><span class='amount'>$tt</td>
		</tr>
		<tr class='order-total'>
			<th>Tổng</th>
			<td data-title='Tổng' class='subtotal'><strong><span class='amount'>$tt</span></strong> </td>
		</tr>	
	</tbody></table>";
    if(isset($_SESSION["user"])){
	echo "<div class='wc-proceed-to-checkout'>		
    <a class='button-continue-shopping button primary is-outline' href='./thanhtoan.php' style='width: 100% !important;'>
    Tiến hành thanh toán	</a>
	</div>";}else{
        echo "<div class='wc-proceed-to-checkout'>		
    <a class='button-continue-shopping button primary is-outline' href='../DangNhap/dangnhap.php' style='width: 100% !important;'>
    Vui lòng đăng nhập để thanh toán	</a>
	</div>";
    }
    echo "</div>
        </div>";
    }
    else
    {
        echo '<div id="content" class="content-area page-wrapper" role="main">
        <div class="row row-main">
            <div class="large-12 col">
                <div class="col-inner">               
                    <div class="woocommerce"><div class="text-center pt pb">
        <div class="woocommerce-notices-wrapper"></div><p class="cart-empty woocommerce-info">Chưa có sản phẩm nào trong giỏ hàng.</p>		
        <p class="return-to-shop">
                <a class="button primary wc-backward" href="./header.php?url=sanpham">
                    Quay trở lại cửa hàng			</a>
            </p>
        </div></div>
                </div><!-- .col-inner -->
            </div><!-- .large-12 -->
        </div><!-- .row -->
    </div>';
    }
    include './footer.php';
?>
<script>
    function xoa(){
        return confirm("Bạn có muốn xóa sản phẩm này khỏi giỏ hàng");
    }
</script>
<script src="./assets/js/muahang.js"></script>

