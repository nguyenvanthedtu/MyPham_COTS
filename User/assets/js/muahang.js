$(document).ready(function(){
    $("#quantity").keyup(function(){
        if($("#quantity").val()<=0) {
            $("#add_cart").attr("disabled",true);
            $("#add_cart").css({"cursor":"not-allowed","opacity":0.3});
        }
        else {
            $("#add_cart").attr("disabled",false);
            $("#add_cart").css({"cursor":"pointer","opacity":1});
        }
        
    });
    $("#minus_quantity,#plus_quantity").click(function(e){
        e.preventDefault();
        if($("#quantity").val()<0) {
            $("#add_cart").attr("disabled",true);
            $("#add_cart").css({"cursor":"not-allowed","opacity":0.3});
        }
        else {
            $("#add_cart").attr("disabled",false);
            $("#add_cart").css({"cursor":"pointer","opacity":1});
        }
    });
    $("#add_cart").click(function(){
        link = window.location.href.split('='); 
        $.ajax({
            type: "POST",
            url: "../User/addcart.php",
            data: {
                "id":link[2],
                "quantity":$("#quantity").val()
            },
            success: function(data) {
                $("#alert").fadeIn("slow");
                $("#alert_content").html(data);
            }
        })
    });
    // Delete cart
    $(".delete").click(function(){
        var kq = confirm("Bạn có muốn xóa sản phẩm này khỏi giỏ hàng");
        if(kq==true) {
            $.ajax({
                type: "POST",
                url: "../User/deletecart.php",
                data: {
                    "id":$(".delete").attr("id"),
                },
                success: function(data) {
                    alert(data); 
                }
            })
        }
       
    });
    // Event button update/add cart
    $("#quantity").keyup(function(){
        var max = parseInt($("#quantity").attr("max"));
        // Update_cart
        if($("#quantity").val()<=0) {
            $("#update_cart").attr("disabled",true);
            $("#update_cart").css({"cursor":"not-allowed","opacity":0.3});
        }
        else if($("#quantity").val()>max) {
            $("#update_cart").attr("disabled",true);
            $("#update_cart").css({"cursor":"not-allowed","opacity":0.3});  
        }
        else if(0<$("#quantity").val()<=max) {
            $("#update_cart").attr("disabled",false);
            $("#update_cart").css({"cursor":"pointer","opacity":1});
        }
        else {
            $("#update_cart").attr("disabled",false);
            $("#update_cart").css({"cursor":"pointer","opacity":1});
        }
        // Add_cart
        if($("#quantity").val()<=0) {
            $("#add_cart").attr("disabled",true);
            $("#add_cart").css({"cursor":"not-allowed","opacity":0.3});
        }
        else if($("#quantity").val()>max) {
            $("#add_cart").attr("disabled",true);
            $("#add_cart").css({"cursor":"not-allowed","opacity":0.3});  
        }
        else if(0<$("#quantity").val()<=max) {
            $("#add_cart").attr("disabled",false);
            $("#add_cart").css({"cursor":"pointer","opacity":1});
        }
        else {
            $("#add_cart").attr("disabled",false);
            $("#add_cart").css({"cursor":"pointer","opacity":1});
        }
    });
    
});